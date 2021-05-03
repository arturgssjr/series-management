<template>
<!--    <div>-->
<!--        {{ series.describe.name }}-->
<!--        <Seasons :serie="series"/>-->
<!--    </div>-->
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ series.describe.name }}
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <CardDetail :resource="series" description="Some details about the serie." title="Serie Information"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import CardDetail from "@/Components/CardDetail";
// import Seasons from "@/Pages/Serie/Seasons";

export default {
  name: "Show",
  components: {
    AppLayout,
    CardDetail,
    // Seasons,
  },
  props: {
    series: Object
  }
};
</script>

<style scoped>

</style>
