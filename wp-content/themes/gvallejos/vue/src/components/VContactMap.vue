<template>
    <div class="contact-map-layout">
        <iframe width="100%" height="100%" :src=mapUrl frameBorder="0" ></iframe>
    </div>
</template>
<script>
export default {
    props: [
        'mapUrl'
    ]
}
</script>
<style lang="stylus">
    .contact-map-layout
        width: 610px;
        height: 595px;

</style>

