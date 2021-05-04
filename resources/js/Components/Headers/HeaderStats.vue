<template>
    <!-- Header -->
    <div class="relative bg-emerald-600 md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <!-- Card stats -->
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <CardStats
                            statArrow="up"
                            statDescripiron="Since last month"
                            statIconColor="bg-red-500"
                            statIconName="far fa-chart-bar"
                            statPercent="3.48"
                            statPercentColor="text-emerald-500"
                            statSubtitle="TRAFFIC"
                            statTitle="350,897"
                        />
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <CardStats
                            statArrow="down"
                            statDescripiron="Since last week"
                            statIconColor="bg-orange-500"
                            statIconName="fas fa-chart-pie"
                            statPercent="3.48"
                            statPercentColor="text-red-500"
                            statSubtitle="NEW USERS"
                            statTitle="2,356"
                        />
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <CardStats
                            statArrow="down"
                            statDescripiron="Since yesterday"
                            statIconColor="bg-pink-500"
                            statIconName="fas fa-users"
                            statPercent="1.10"
                            statPercentColor="text-orange-500"
                            statSubtitle="SALES"
                            statTitle="924"
                        />
                    </div>
                    <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                        <CardStats
                            statArrow="up"
                            statDescripiron="Since last month"
                            statIconColor="bg-emerald-500"
                            statIconName="fas fa-percent"
                            statPercent="12"
                            statPercentColor="text-emerald-500"
                            statSubtitle="PERFORMANCE"
                            statTitle="49,65%"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CardStats from "@/Components/Cards/CardStats.vue";

export default {
  components: {
    CardStats,
  },
};
</script>
