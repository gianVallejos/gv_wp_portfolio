<template>
    <section class="contact-section">
        <div class="contact-data-layout">
            <div class="contact-data">
                <h2>¿EMPEZAMOS UN PROYECTO?</h2>
                <p class="contact-descripcion">Si tienes alguna idea para un proyecto o alguna consulta, escríbeme y me pondré en contacto contigo lo más rápido posible.</p>
                <div class="form-content">
                    <div class="form-item">
                        <input type="text" placeholder="Full name">
                    </div>                
                    <div class="form-item">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="form-item">
                        <textarea placeholder="Write your message here"></textarea>
                    </div>
                    <div class="form-item">
                        <button class="btn btn-blue">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-image">
            <div class="contact-map-layout">
                <iframe width="100%" height="100%" src="https://maphub.net/embed/48091?button=0" frameBorder="0" />
            </div>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>

<style lang="stylus">
    .contact-section
        display: flex
        min-height: 100vh

    .contact-data-layout, 
    .contact-image
        display: inherit
        width: 50%
        justify-content: center
        align-items: center
        padding: 10px 30px

    .contact-image 
        display: inherit
        justify-content: center
        align-items: center

    .contact-data
        max-width: 675px

    .form-content
        display: grid
        grid-template-columns: .5fr .5fr
        grid-template-rows: auto 182px
        grid-gap: 24px 33px
        .form-item
            textarea
                min-height: 182px;

    .form-item:nth-of-type(3),
    .form-item:nth-of-type(4) 
        grid-column-end: span 2

    .contact-map-layout
        width: 610px
        height: 595px

    p
        &.contact-descripcion
            padding-bottom: 32px

</style>


