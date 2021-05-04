<template>
    <AdminLayout description="Movies" routeLink="movies.index">
<!--        <template #header>-->
<!--            <h2 class="font-semibold text-xl text-gray-800 leading-tight">-->
<!--                Movies-->
<!--            </h2>-->
<!--        </template>-->

<!--        <div class="py-12">-->
<!--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">-->
<!--                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">-->
<!--                    <DescriptionTable :data="paginate.data" :routeName="routeName"/>-->

<!--                    <div v-if="!shouldHidePagination" class="px-6 pb-4 bg-white">-->
<!--                        <Pagination :data="paginate"/>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="flex flex-wrap mt-4">
            <div class="w-full mb-12 px-4">
                <CardTable />
            </div>
        </div>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin";
import CardTable from "@/Components/Cards/CardTable.vue";

// import Pagination from "@/Components/Pagination";
// import DescriptionTable from "@/Components/DescriptionTable";

export default {
  name: "Index",
  components: {
    AdminLayout,
    CardTable,
    // Pagination,
    // DescriptionTable,
  },
  props: {
    paginate: Object,
  },
  computed: {
    shouldHidePagination() {
      return !this.paginate.prev_page_url && !this.paginate.next_page_url;
    },
  },
};
</script>
