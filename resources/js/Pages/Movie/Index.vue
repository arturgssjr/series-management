<template>
    <div>
        <Movies :movies="movies"/>
    </div>
</template>

<script>
import Movies from "@/Pages/Movie/Movies";

export default {
    name: "Index",
    components: {Movies},
    props: {
        movies: Object
    }
}
</script>

