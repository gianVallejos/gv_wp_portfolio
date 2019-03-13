<template>
    <div class="tecnologias-cuadrado">
        <div class="tecnologias-datos">
            <div class="item">Cliente:</div><div class="item-content">{{ data.txt_cliente }}</div>
            <div class="item">Date:</div><div class="item-content">{{ data.dt_fecha }}</div>
            <div class="item" v-if="data.repeater_disenadores.length != 0" >Design UI/UX:</div><div class="item-content">
                <span v-for="(disenador, key) in data.repeater_disenadores" :key=key >
                    {{ disenador.text_disenador }}
                </span>
            </div>
            <div class="item" v-if="data.repeater_programadores.length != 0">Programming:</div><div class="item-content">
                 <span v-for="(programador, key) in data.repeater_programadores" :key=key >
                {{ programador.text_programador }}
                </span>
            </div>
        </div>
        <div class="tecnologias-imgs">
            <div class="item" v-if="data.repeater_tecnologias.length != 0">Technologies: </div>
            <div class="item-img" v-for="(item, key) in data.repeater_tecnologias" :key=key >
                <img :src=item.img_tecnologia alt="Technology Imagen">
            </div>                            
        </div>
    </div>
</template>

<script>
export default {
    props: [
        'data'
    ]
}
</script>

<style lang="stylus">
    .tecnologias-cuadrado 
        .item
            font-weight: 600
            padding: 5px 0px
            color: #546972
            font-size: .95rem
        .item-content
            margin: 5px 0px
</style>
