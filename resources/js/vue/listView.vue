<template>
    <div>
        <div v-for="(article, index) in articles" :key="index">
            <list-article
                :article="article"
                class="article"
                v-on:articlechanged="$emit('reloadlist')"
            />
        </div>
    </div>
</template>

<script>
import listArticle from './listArticle'

export default{
    props:['articles'],
    components:{
        listArticle
    }
}
</script>

<style scoped>
.article{
    background:#e6e6e6;
    padding: 5px;
    margin-top:5px;
}