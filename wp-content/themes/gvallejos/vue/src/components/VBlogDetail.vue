<template>
    <section class="blog-detail-content">
        <div class="container">
            <header class="head-content">
                <span class="date">{{ data.date }}</span>                
                <h1 class="title">{{ data.title.rendered }}</h1>
                <div class="details">
                    <div class="author">
                        Written by {{ data._embedded.author[0].name }} in
                    </div>
                    <div class="category" v-if="data._embedded['wp:term']" >
                       <a :href="data._embedded['wp:term'][0][0].link" >{{ data._embedded['wp:term'][0][0].name }}</a>
                    </div>
                </div>
            </header>
            <div class="post-image">
                <img :src=data.fimg_url alt="Post Image">
            </div>
            <div class="wrap-content">
                <div class="post-content">
                    <article class="content" v-html=data.content.rendered>
                        
                    </article>
                    <div class="tag-content">
                        <a href="#">
                            <div class="tag">Programming</div>
                        </a>
                        <a href="#">
                            <div class="tag">Programming</div>
                        </a>
                    </div>
                    <section id="comment">
                        <div class="comment-container">
                            <div class="title-comment">2 COMMENTS</div>
                            <div class="comment-item">
                                <div class="comment-img">
                                    <img src="/images/user.png" alt="Comment Profile">
                                </div>
                                <div class="comment-description">
                                    <div class="author">ADMIN</div>
                                    <div class="date-content">
                                        <div class="date">
                                            Posted at 15:32h, 06 December
                                        </div>
                                        <a href="#">REPLY</a>
                                    </div>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.</p>
                                </div>
                            </div>
                            <div class="comment-item">
                                    <div class="comment-img">
                                        <img src="/images/user.png" alt="Comment Profile">
                                    </div>
                                    <div class="comment-description">
                                        <div class="author">ADMIN</div>
                                        <div class="date-content">
                                            <div class="date">
                                                Posted at 15:32h, 06 December
                                            </div>
                                            <a href="#">REPLY</a>
                                        </div>
                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.</p>
                                    </div>
                            </div>
                            <div class="comment-form-container">
                                <div class="title-comment">POST A COMMENT</div>
                                <div class="comment-form-grid">
                                    <div class="comment-form-item">
                                        <input placeholder="Full Name" type="text" />
                                    </div>
                                    <div class="comment-form-item">
                                        <input placeholder="E-mail address" type="text" />
                                    </div>
                                    <div class="comment-form-item">
                                        <textarea placeholder="Write your comment here" type="text" ></textarea>
                                    </div>
                                    <div class="comment-form-item">
                                        <button class="btn btn-blue">Send</button>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </section>
                    <section id="related-posts">
                        <h2>RELATED POSTS</h2>
                        <div class="related-posts-grid">
                            <div class="related-post-item">
                                <a href="#">
                                    <div class="related-post-container">
                                        <div class="related-post-img">
                                            <img src="/images/blog/blog-01.jpg" alt="Related post" />
                                        </div>
                                        <div class="related-post-text">
                                            <h3>5 Startups you will definitely hear from in the future</h3>
                                        </div>
                                        <div class="related-post-date">
                                            07 febrero 2019
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="related-post-item">
                                <a href="#">
                                    <div class="related-post-container">
                                        <div class="related-post-img">
                                            <img src="/images/blog/blog-01.jpg" alt="Related post" />
                                        </div>
                                        <div class="related-post-text">
                                            <h3>5 Startups you will definitely hear from in the future</h3>
                                        </div>
                                        <div class="related-post-date">
                                            07 febrero 2019
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="related-post-item">
                                <a href="#">
                                    <div class="related-post-container">
                                        <div class="related-post-img">
                                            <img src="/images/blog/blog-01.jpg" alt="Related post" />
                                        </div>
                                        <div class="related-post-text">
                                            <h3>5 Startups you will definitely hear from in the future</h3>
                                        </div>
                                        <div class="related-post-date">
                                            07 febrero 2019
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    </section>
                </div>
                <div class="widgets-content">
                    <section id="about-me">
                        <h2>ABOUT ME</h2>
                        <div class="perfil-layout">
                            <div class="img-content">
                                <img :src=img_back_perfil alt="Imagen Blog">
                            </div>
                            <div class="img-perfil">
                                <img :src=imgUserUrl alt="Perfil">
                            </div>
                        </div>
                        <div class="title">
                            GIAN VALLEJOS
                        </div>
                        <div class="profesion">
                            Frontend Developer
                        </div>
                        <p>I’m Gian Vallejos, Computing Science bachellor working as a web developer since 2016. You can follow my shared knowleade on this blog!</p>
                        <div class="redes-sociales">
                            <div class="rs-item">
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                            <div class="rs-item">
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="rs-item">
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                            <div class="rs-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section id="recent-posts-container">
                        <h2>RECENT POSTS</h2>
                        <article class="recent-post">
                            <div class="imagen">
                                <img src="/images/blog/blog-01.jpg" alt="Imagen Recent Post">
                            </div>
                            <div class="data">
                                <h5>5 startups you will definitely hear from in the future</h5>
                                <div class="details">
                                    <a href="#" class="category">TECHNOLOGY</a> - <div class="date">07 FEB, 2018</div>
                                </div>
                            </div>
                        </article>
                        <article class="recent-post">
                            <div class="imagen">
                                <img src="/images/blog/blog-02.jpg" alt="Imagen Recent Post">
                            </div>
                            <div class="data">
                                <h5>5 startups you will definitely hear from in the future</h5>
                                <div class="details">
                                    <a href="#" class="category">TECHNOLOGY</a> - <div class="date">07 FEB, 2018</div>
                                </div>
                            </div>
                        </article>
                        <article class="recent-post">
                            <div class="imagen">
                                <img src="/images/blog/blog-03.jpg" alt="Imagen Recent Post">
                            </div>
                            <div class="data">
                                <h5>5 startups you will definitely hear from in the future</h5>
                                <div class="details">
                                    <a href="#" class="category">TECHNOLOGY</a> - <div class="date">07 FEB, 2018</div>
                                </div>
                            </div>
                        </article>
                        
                    </section>
                    <section id="share-post">
                        <h2>FOLLOW US</h2>
                        <div class="redes-sociales">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-facebook"></i>                                
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    props: [
        'data',
        'img_back_perfil',
        'imgUserUrl'
    ]
}
</script>

<style lang="stylus">
    .blog-detail-content
        display: flex
        justify-content: center
        padding: 70px 10px
        .head-content
            text-align: center
            padding-bottom: 30px
            .date
                font-size: .85rem
                color: #546972
            .title
                font-size: 2.9rem
                margin: 20px 45px
            .details
                display: flex
                justify-content: center
                font-size: .8rem
            .author
                padding: 0px 5px
            .category 
                a
                    color: #546972

        .post-image
            max-height: 630px
            overflow: hidden
            margin: 20px 0px
            img
                object-fit: cover
                max-width: 100%
                height: auto
        .wrap-content
            display: grid
            grid-template-columns: .75fr .25fr
            grid-column-gap: 45px
            padding-top: 30px
            .post-content 
                .content 
                    h3
                        font-size: 1.05rem
                    p
                        line-height: 23px
                        font-size: 1.02rem
                        padding-bottom: 14px
                .tag-content
                    display: flex
                    margin: 30px 0px
                    a 
                        .tag
                            padding: 7px 22px
                            background: #eaeaea
                            margin: 0px 8px
                            font-size: .8rem
                            text-transform: uppercase
                            text-decoration: none
                            &:first-of-type
                                margin-left: 0px

            .widgets-content 
                .perfil-layout
                    display: flex
                    flex-direction: column
                    align-items: center
                    .img-content
                        max-height: 150px
                        overflow: hidden
                        img
                            max-width: 100%
                            height: auto
                            object-fit: cover
                    .img-perfil
                        width: 110px
                        height: 110px
                        border: 8px solid white
                        border-radius: 50%
                        margin-top: -55px

    #about-me
        text-align: center
        .title
            font-size: 1.42rem
            font-family: 'Mukta', sans-serif
            font-weight: bold
            text-transform: uppercase
            padding-top: 12px
        .profesion
            font-size: .80rem;
        p
            margin: 20px 0px
            font-size: .86rem
            line-height: 22px
        .redes-sociales
            display: flex
            justify-content: center
            padding: 12px 0px
            .rs-item
                font-size: 1.4rem;
                padding: 0px 10px;

    #recent-posts-container
        margin: 52px 0px

    .widgets-content 
        h2
            text-align: center
            font-size: 1.1rem
            margin-bottom: 28px    

    #recent-posts-container 
        .recent-post
            display: grid
            grid-template-columns: .3fr .7fr
            grid-column-gap: 14px
            margin: 20px 0px
            h5
                margin: 0px 5px
                font-size: .85rem
            .details
                display: flex
                font-size: .75rem
                padding: 7px 0px
                a, .date
                    padding: 0px 5px


    #share-post 
        .redes-sociales
            display: grid
            grid-template-columns: repeat(4, 1fr)
            grid-template-rows: 73px
            grid-column-gap: 8px
            a
                display: flex
                justify-content: center
                align-items: center
                text-decoration: none
                background: #546972
                color: #dfe8f0
                font-size: 1.3rem

    #comment 
        .comment-container
            background: #dfe8f0
            padding: 60px 50px
            .comment-item 
                display: grid
                grid-template-columns: 90px auto
                grid-column-gap: 25px
                align-items: center
                margin: 38px 0px
                .comment-img
                    width: 100%
                    height: 65px
                    text-align: center
                    img
                        max-width: 65px
                        height: auto
                        object-fit: cover
                .comment-description 
                    .author
                        font-weight: bold
                        font-size: 0.95rem
                    .date-content
                        display: flex
                        padding: 10px 0px
                        a
                            margin: 0 15px
                            font-weight: bold
                            color: #546972
                            font-weight: 600
                    p
                        line-height: 22px
                        margin: 10px 0px
        .title-comment
            font-size: 1.05rem
            font-weight: 600    

        .comment-form-grid
            margin-top: 30px
            display: grid
            grid-template-columns: repeat(2, .5fr)
            grid-gap: 22px 35px
            .comment-form-item
                &:nth-of-type(3)
                    grid-column-end: 3
                    grid-column-start: 1
                    height: 160px
                textarea
                    min-height: 87px!important

    #related-posts
        margin: 52px 0px
        h2
            padding-bottom: 10px
        .related-posts-grid
            display: grid
            grid-template-columns: repeat(3, 1fr)
            grid-column-gap: 16px
        .related-post-item 
            .related-post-text 
                h3
                    text-align: center
            .related-post-date
                text-align: center
                text-transform: uppercase
                color: #546972
            a
                img
                    transition: .8s all ease
                &:hover
                    text-decoration: none
                    img
                        transform: scale(1.1)
            .related-post-img
                overflow: hidden
</style>


