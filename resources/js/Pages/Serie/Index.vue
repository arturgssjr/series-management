<template>
    <div>
        <ul>
            <li v-for="serie in series" :key="serie.id">{{ serie.describe.name }}
                <Seasons :serie="serie"/>
            </li>
        </ul>
    </div>
</template>

<script>
import Seasons from "@/Pages/Serie/Seasons";

export default {
    name: "Index",
    components: {Seasons},
    props: {
        series: Object
    }
}
</script>

