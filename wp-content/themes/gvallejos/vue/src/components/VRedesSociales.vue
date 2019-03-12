<template>
    <div class="redes-sociales">                
        <div class="rs-item" v-for="rs in rsList" :key=rs.id>
            <a :href=rs.url>
                <i :class=rs.className ></i>
            </a>
        </div>                
    </div>
</template>

<script>
export default {
    props: [
        'rsList'
    ]
}
</script>

<style lang="stylus">
    .leftbar 
        .redes-sociales
            display: flex
            padding: 36px 0px 26px
            justify-content: flex-end
            padding-right: 8px
            .rs-item
                margin: 0px 10px
                i
                    font-size: 2em
</style>


