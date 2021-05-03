<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Series
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <DescriptionTable :data="paginate.data" :routeName="routeName"/>

                    <div v-if="!shouldHidePagination" class="px-6 pb-4 bg-white">
                        <Pagination :data="paginate" />
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import Pagination from "@/Components/Pagination";
import DescriptionTable from "@/Components/DescriptionTable";

export default {
  name: "Index",
  components: {
    AppLayout,
    Pagination,
    DescriptionTable,
  },
  props: {
    routeName: String,
    paginate: Object
  },
  computed: {
    shouldHidePagination() {
      return !this.paginate.prev_page_url && !this.paginate.next_page_url;
    },
  },
};
</script>

