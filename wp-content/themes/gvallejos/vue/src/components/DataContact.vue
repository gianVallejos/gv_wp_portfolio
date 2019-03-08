<template>
    <VContact />
</template>

<script>

    import VContact from './VContact.vue'

    export default {
        components: {
            VContact
        },
        props: [
            'dirUrl'
        ]
    }
</script>
