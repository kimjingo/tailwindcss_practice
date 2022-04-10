<template>
    <div class="article">
        <input
            type="checkbox"
            @change="updateCheck()"
            v-model="article.completed"
        />
        <span :class="[article.completed_at ? 'completed':'', 'articleText']">{{ article.title }}</span>
        <button @click="removeArticle()" class="trashcan" >
            <font-awesome-icon 
                icon="trash" 
            />
        </button>
    </div>
</template>

<script>
    export default{
        props:['article'],
        methods:{
            updateCheck(){
                axios.put('api/article/'+this.article.id,{
                    article:this.article,
                })
                .then( response => {
                    if(response.status == 200){
                        this.$emit('articlechanged');
                    }
                })
                .catch(error=>{
                    console.log(error);
                })
            },
            removeArticle(){
                axios.delete('api/article/'+this.article.id)
                .then( response => {
                    if(response.status == 200){
                        this.$emit('articlechanged');
                    }
                })
                .catch(error=>{
                    console.log(error);
                })
            }
        }
    }
</script>

<style scoped>
.completed{
    text-decoration:line-through;
    color:#999999;
}
.articleText{
    width:100%;
    margin-left:20px;
}
.article{
    display:flex;
    justify-content:center;
    align-items:center;
}
.trashcan{
    background:#e6e6e6;
    border:none;
    color:#ff0000;
    outline:none;
}
</style>