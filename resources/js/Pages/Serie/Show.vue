<template>
    <div>
        {{ series.describe.name }}
        <Seasons :serie="series"/>
    </div>
</template>

<script>
import Seasons from "@/Pages/Series/Seasons";

export default {
    name: "Show",
    components: {Seasons},
    props: {
        series: Object
    }
}
</script>

<style scoped>

</style>
