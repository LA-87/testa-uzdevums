<script setup>
// export default {
//     data() {
//         return {
//             show: true,
//         }
//     },
//     watch: {
//         '$page.props.flash': {
//             handler() {
//                 this.show = true
//             },
//             deep: true,
//         },
//     },
// }

const props = defineProps({
    flash: Array
})
console.log(props.flash)
</script>

<template>
    <div>
        {{ flash }}
    </div>
</template>
