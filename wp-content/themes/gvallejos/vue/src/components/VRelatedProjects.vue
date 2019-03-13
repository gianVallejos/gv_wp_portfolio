<template>
    <div class="related-proyecto">
        <div class="title">
            <h2>{{ title }}</h2>
        </div>
        <a v-for="(item, key) in data" :key=key :href=item.link >
            <article class="related-pr-item">
                <div class="logotipo-container">
                    <img :src=item.acf.img_logotipo alt="Logotipo">
                </div>
                <div class="overlay"></div>
                <div class="logotipo-bg-img">
                    <img :src=item.acf.img_portada alt="Portfolio" />
                </div>
            </article>
        </a>
    </div>
</template>
<script>
export default {
    props: [
        'title',
        'data'
    ]
}
</script>
<style lang="stylus">

</style>


