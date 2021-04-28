<template>
    <div>{{ movie.describe.name }}</div>
</template>

<script>
export default {
    name: "Show",
    props: {
        movie: Object
    }
}
</script>

<style scoped>

</style>
