<template>
    <ul class="ml-4">
        <li v-for="season in serie.seasons" :key="season.id">Season {{ season.number }}
            <Episodes :season="season"/>
        </li>
    </ul>
</template>
<script>
import Episodes from "@/Pages/Serie/Episodes";

export default {
    name: 'Seasons',
    components: {Episodes},
    props: {
        serie: Object
    }
}
</script>
