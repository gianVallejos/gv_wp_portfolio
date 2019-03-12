<template>
    <aside class="leftbar">
        <div class="leftbar-container">

            <div class="logotipo">
                <div class="logotipo-container">
                    <a href="/">
                        <figure>
                            <img :src=imageUrl alt="logotipo" />
                        </figure>
                    </a>
                </div>
            </div>
            
            <nav class="navegacion">
                <ul>
                    <li v-for="item in itemsNav" :key=item.id>
                        <a :href="url + item.url" :class="{ active: (navActive == item.activeName ? true : false) }" >{{ item.name }}</a>
                    </li>                    
                </ul>
            </nav>
            
            <VRedesSociales :rsList = rsList />
            
            <div class="contact">
                <a href="mailto:gian.vallejos92@gmail.com">
                    <div class="contact-item">                    
                        <span>gian.vallejos92@gmail.com </span>
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>                    
                    </div>
                </a>
                <a href="tel:+51982780954">
                    <div class="contact-item">                    
                            <span>+51 982 780954</span>
                            <div class="contact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>            
                    </div>                
                </a>
            </div>

            <footer>
                <div class="rights">© 2019 V&C Websites</div>
                <div class="rights">All right reserved</div>
            </footer>
        </div>
    </aside>
</template>

<script>

    import VRedesSociales from './VRedesSociales'

    export default {
        components: {
            VRedesSociales
        },
        props: [
            'imageUrl',
            'itemsNav',
            'rsList',
            'navActive',
            'url'
        ]
    }
</script>

<style lang="stylus">
    
    .leftbar
        position: fixed
        width: 262px
        height: 100%
        box-sizing: border-box
        background: #fff
        z-index: 999

    .leftbar-container
        width: 252px
        height: inherit
        border-right: 1px dashed #e3e3e3

    .logotipo
        display: flex
        height: 162px
        justify-content: center
        align-items: center
        &.logotipo-container
            width: 176px
            height: 64px

    .navegacion 
        ul
            margin: 0px
            padding: 0px
            li
                height: 40px
                a 
                    position: relative
                    display: flex
                    font-family: 'Mukta', sans-serif
                    font-size: 1.3em
                    letter-spacing: 1.2px
                    height: inherit
                    justify-content: flex-end
                    align-items: center
                    padding-right: 18px
                    text-transform: uppercase
                    border-top: 1px dashed #e3e3e3
                    &.active
                        position: relative
                        background: #546972
                        color: white
                        border: none
                        &::after
                            content: ''
                            position: absolute
                            top: 0px
                            right: -20px
                            width: 0px
                            height: 0px
                            border-top: 20px solid transparent
                            border-bottom: 20px solid transparent
                            border-left: 20px solid #546972
                            z-index: 999
                &:last-of-type
                    & a
                        border-bottom: 1px dashed #e3e3e3

    .contact
        font-size: .85em

    .contact-item
        display: flex
        justify-content: flex-end
        align-items: center
        padding: 7px 0px
        padding-right: 6px

    .contact-icon
        padding: 0px 10px
        min-width: 20px
        text-align: center
        i
            font-size: 1.2em

    footer
        padding: 26px 0px
        font-size: .85em
        .rights
            display: block
            text-align: right
            padding: 2px 18px

</style>
