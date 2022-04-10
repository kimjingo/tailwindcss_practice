<template>
    <div class="articleContainer">
        <div class="heading">
            <h2 id="title">To do list</h2>
            <add-article-form 
                v-on:reloadlist="getArticles()"
            />
        </div>
        <list-view 
            :articles="articles"
            v-on:reloadlist="getArticles()"
        />
    </div>
</template>

<script>
import addArticleForm from "./addArticleForm"
import listView from "./listView"
export default {
    components:{
        addArticleForm,
        listView
    },
    data:function(){
        return {
            articles:[]
        }
    },
    methods:{
        getArticles(){
            axios.get('api/articles')
            .then( response => {

                this.articles = response.data.data;
                console.log(response.data);
            })
            .catch(error=>{
                console.log(error);
            })
        }
    },
    created(){
        this.getArticles();
    }
}
</script>

<style scoped>
.articleContainer{
    width:350px;
    margin:auto;
    background-color:#FAF0EE;
}
.heading{
    background:#e6e6e6;
    padding:10px;
}
#title{
    text-align:center;
}
</style>