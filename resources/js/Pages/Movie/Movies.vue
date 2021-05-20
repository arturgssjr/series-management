<template>
    <ul>
        <li v-for="movie in movies" :key="movie.id">{{ movie.describe.name }}</li>
    </ul>
</template>
<script>
export default {
    name: 'Movies',
    props: {
        movies: Object
    }
}
</script>
