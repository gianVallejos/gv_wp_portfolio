<template>
    <section class="testimonio">
        <h2>TESTIMONIOS</h2>
        <div class="testimonio-content">
            <div class="testimonio-descripcion-container">
                <div class="arrow-left" v-on:click=prevTestimonio() v-if="datos.length > 1" >
                    <i class="fas fa-angle-left"></i>
                </div>
                <div class="quote">
                    <img :src=quoteImg class="quote-img" alt="Quote sign">
                </div>
                <div class="testimonio-descripcion">
                    <p id="tst-descripcion" v-html=cur_testimonio.descripcion />
                </div>
                <div class="arrow-right" v-on:click=nextTestimonio() v-if="datos.length > 1" >
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>            
            <div class="testimonio-author">
                <span id="tst-autor">{{ cur_testimonio.autor }}</span>
            </div>
        </div>
        <div class="testimonio-img-container">
            <div v-for="(testimonio, index) in datos" :key=index v-on:click=fillTestimonio(index) class="testimonio-item" >
                <img :src="( testimonio.image_user != false ) ? testimonio.image_user : imgUserUrl" :class=datos[index].active alt="Testimonio" />
            </div>
        </div>
    </section>
</template>
<script>
export default {
    mounted () {
        console.log('img: ' + JSON.stringify(this.datos))
        this.data_size = this.datos.length
        this.autoTestimonios()
    },
    data () {
        return {
            data_size: 0,
            cur_testimonio: {
                descripcion: '',
                autor: ''
            },
            cur_testimonio_id: 0
        }
    },
    props: [
        'datos',
        'quoteImg',
        'imgUserUrl'
    ],
    methods: {
        autoTestimonios () {
            var _self = this
            this.fillTestimonio( this.cur_testimonio_id )
            setInterval(function () {
                _self.cur_testimonio_id = _self.cur_testimonio_id + 1
                if( _self.cur_testimonio_id + 1 > _self.data_size ){
                    _self.cur_testimonio_id = 0
                }
                _self.fillTestimonio( _self.cur_testimonio_id )                
            }, 5000);
        },
        fillTestimonio (ind) {
            this.cur_testimonio.descripcion = this.datos[ind].txt_descripcion_de_testimonio
            this.cur_testimonio.autor = this.datos[ind].txt_autor
            this.restartTestimonios()
            this.datos[ind].active = 'active'
        },
        restartTestimonios () {
            for( var i = 0; i < this.datos.length; i++ ){
                this.datos[i].active = ''
            }  
        },
        prevTestimonio () {         
            if( this.cur_testimonio_id == 0 ){
                this.cur_testimonio_id = this.datos.length - 1
            }else {
                this.cur_testimonio_id = this.cur_testimonio_id - 1
            }
            this.fillTestimonio ( this.cur_testimonio_id )
        },
        nextTestimonio () {
            if( this.cur_testimonio_id + 1 == this.datos.length ){
                this.cur_testimonio_id = 0
            }else {
                this.cur_testimonio_id = this.cur_testimonio_id + 1
            }
            this.fillTestimonio ( this.cur_testimonio_id )
        }
    }
}
</script>

<style lang="stylus">
    .testimonio-descripcion-container
        display: flex
        min-height: 125px   
        .arrow-left, .arrow-right
            display: flex
            width: 150px
            align-items: center   
            cursor: pointer         
            i
                font-size: 3rem
                opacity: .5
                color: #b6b8b8
        .arrow-left
            margin-right: 30px
        .arrow-right
            margin-left: 30px
        .quote
            display: inherit
            align-items: center
            padding-right: 55px
            min-height: inherit
            width: 100px
            .quote-img
                max-width: 55px;
                max-height: 55px;

    .testimonio-descripcion
        display: inherit
        align-items: flex-start
        min-height: inherit
            

    .testimonio-author
        text-align: right
        font-size: 1em
        padding: 15px 0px
        color: #546972
        padding-right: 95px
    

    .testimonio-img-container
        display: flex
        align-items: center
        .testimonio-item            
            padding: 0px 10px
            cursor: pointer  
            img
                width: 38px
                height: 38px  
                border-radius: 50%              
                transition: all .4s ease
                &.active
                    width: 52px
                    height: 52px
</style>
