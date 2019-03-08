<template>
    <section class="blog-content">
        <div class="container">
            <div class="top-blog-container">
                <div class="category-container">
                    <button class="btn btn-blog-category active">
                        ALL
                    </button>
                    <button class="btn btn-blog-category">
                        TECHNOLOGY
                    </button>
                    <button class="btn btn-blog-category">
                        ENTREPENEUR
                    </button>
                </div>
                <div class="search-container">
                    <div class="search-input-layout">
                        <input type="text" placeholder="Search" />
                        <button class="btn-input">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="blog-posts-container">
                <a v-for="post in posts" :key=post.id href="#">
                    <article class="post-container">
                        <div class="post-content">
                            <h3>{{ post.title }}</h3>
                            <div class="author">
                                <div class="item">{{ post.date }}</div>
                                <span class="separator"><i class="fas fa-circle"></i></span>
                                <div class="item">{{ post.autor }}</div>                            
                            </div>
                            <div class="categories">
                                <div class="item" v-for="item in post.categories" :key=item.id >{{ item.text }}</div>
                            </div>                        
                        </div>
                        <div class="overlay"></div>   
                        <img :src=post.img alt="Blog Imagen">
                    </article>
                </a>                
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: [
        'posts'
    ]
}
</script>

<style lang="stylus">
    .blog-content 
        display: flex
        flex-flow: column
        justify-content: center
        align-items: center
        padding: 70px 10px
    
    .top-blog-container 
        display: flex
        padding-bottom: 28px
    
    .blog-posts-container
        display: grid
        grid-template-columns: .5fr .5fr
        grid-gap: 32px 58px

    .category-container,
    .search-container 
        width: 50%    

    .search-container
        display: flex
        justify-content: flex-end

    .search-input-layout
        width: 362px

    .btn-blog-category
        background: #eaeaea
        &.active
            background: #546972
            color: white

    a 
        article
            &.post-container
                position: relative
                box-sizing: border-box
                padding: 45px 54px
                overflow: hidden
                height: 298px
                .overlay
                    background: rgba(0, 0, 0, .4)
                    position: absolute
                    top: 0
                    left: 0
                    width: 100%
                    height: 100%
                    z-index: 2
                .post-content
                    position: relative
                    z-index: 6
                    color: white
                    height: 190px
                    h3
                        margin: 0px
                    .author
                        display: flex
                        position: absolute
                        bottom: 27px
                    .categories
                        display: flex
                        position: absolute
                        bottom: 0px
                        font-size: 13px
                        text-decoration: underline
                    .item
                        padding: 0px 5px
                img 
                    position: absolute
                    top: 0
                    left: 0
                    z-index: -2
                    transition: all .4s ease
                    will-change: transform
                    width: 100%
                    height: 100%
                    object-fit: cover
        &:hover
            article
                &.post-container 
                    .post-content 
                        h3
                            text-decoration: underline
                    img
                        transform: scale(1.2)

    

    @media screen and (max-width: 991px)
        .blog-posts-container
            grid-template-columns: 1fr

</style>


