<template>
    <ul class="ml-4">
        <li v-for="episode in season.episodes" :key="episode.id">{{ episode.name }}</li>
    </ul>
</template>
<script>
export default {
    name: 'Episodes',
    props: {
        season: Object
    }
}
</script>
