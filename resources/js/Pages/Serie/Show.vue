<template>
    <div>
        {{ series.describe.name }}
        <Seasons :serie="series"/>
    </div>
</template>

<script>
import Seasons from "@/Pages/Serie/Seasons";

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
