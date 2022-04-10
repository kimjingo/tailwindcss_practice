<template>
    <div class="addArticle">
        <input type="text" v-model="article.title"/>
        <font-awesome-icon 
            icon="plus-square" 
            :class="[article.title? 'active':'inactive', 'plus']" 
            @click="addArticle()"
        />
    </div>
</template>

<script>
    export default{
        data:function(){
            return {
                article:{
                    title:"",
                    body:""
                }
            }
        },
        methods:{
            addArticle(){
                if(this.article.title==''){
                    return;
                }
                axios.post('api/article',{
                    title:this.article.title
                })
                .then( response => {
                    if(response.status == 201){
                        this.article.title = "";
                        this.$emit('reloadlist');
                    }
                })
                .catch(error => {
                    console.log(error);
                })
            }
        }
    }
</script>

<style scoped>
.addArticle{
    display:flex;
    justify-content:center;
    align-items:center;
}
input, textarea{
    background:#f7f7f7;
    border:0px;
    outline:none;
    padding:5px;
    margin-right:10px;
    width:100%;

}
.plus{
font-size:20px;
}
.active{
color:#00CE25;
}
.inactive{
color:#999999;
}

</style>