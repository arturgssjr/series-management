<template>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                Name
            </th>
<!--            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">-->
<!--                Description-->
<!--            </th>-->
<!--            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">-->
<!--                Folder-->
<!--            </th>-->
            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                Actions
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        <tr v-for="resource in data" :key="resource.id">
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm font-medium text-gray-900">{{ resource.describe.name }}</div>
            </td>

<!--            <td class="px-6 py-4 whitespace-nowrap">-->
<!--                <div class="text-sm text-gray-900">{{ resource.describe.description }}</div>-->
<!--            </td>-->

<!--            <td class="px-6 py-4 whitespace-nowrap">-->
<!--                <svg class="h-10 w-10 rounded-full text-center" v-if="!resource.describe.url_image" id="Layer_1"-->
<!--                     style="enable-background:new 0 0 496.158 496.158;" version="1.1" viewBox="0 0 496.158 496.158"-->
<!--                     x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"-->
<!--                     xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">-->
<!--                    <path-->
<!--                        d="M248.082,0.003C111.07,0.003,0,111.063,0,248.085c0,137.001,111.07,248.07,248.082,248.07c137.006,0,248.076-111.069,248.076-248.07C496.158,111.062,385.088,0.003,248.082,0.003z"-->
<!--                        style="fill:#D61E1E;"/>-->
<!--                    <path-->
<!--                        d="M248.082,39.002C132.609,39.002,39,132.602,39,248.084c0,115.463,93.609,209.072,209.082,209.072c115.467,0,209.076-93.609,209.076-209.072C457.158,132.602,363.549,39.002,248.082,39.002z"-->
<!--                        style="fill:#F4EDED;"/>-->
<!--                    <path-->
<!--                        d="M145.23,144.237h-24.44c-3.21,0-5.819,4.741-5.819,10.605s2.609,10.611,5.819,10.611h24.44c3.217,0,5.826-4.747,5.826-10.611C151.057,148.978,148.447,144.237,145.23,144.237z"-->
<!--                        style="fill:#5B5147;"/>-->
<!--                    <path-->
<!--                        d="M380.289,172.06H226.545c-2.025-9.851-9.416-17.176-18.244-17.176h-92.199c-10.403,0-18.818,10.125-18.818,22.592V328.9c0,10.254,8.314,18.581,18.58,18.581h264.425c10.262,0,18.586-8.327,18.586-18.581V190.655C398.875,180.38,390.551,172.06,380.289,172.06z"-->
<!--                        style="fill:#5B5147;"/>-->
<!--                    <path-->
<!--                        d="M248.076,166.711c-51.133,0-92.604,41.462-92.604,92.602c0,51.146,41.471,92.608,92.604,92.608c51.139,0,92.6-41.462,92.6-92.608C340.676,208.174,299.215,166.711,248.076,166.711z"-->
<!--                        style="fill:#F4EDED;"/>-->
<!--                    <path-->
<!--                        d="M248.086,171.416c-48.547,0-87.909,39.355-87.909,87.909c0,48.537,39.362,87.898,87.909,87.898c48.543,0,87.896-39.361,87.896-87.898C335.981,210.771,296.629,171.416,248.086,171.416z"-->
<!--                        style="fill:#5B5147;"/>-->
<!--                    <path-->
<!--                        d="M248.611,205.005c-29.992,0-54.312,24.31-54.312,54.308c0,29.991,24.319,54.321,54.312,54.321s54.318-24.33,54.318-54.321C302.93,229.315,278.603,205.005,248.611,205.005z"-->
<!--                        style="fill:#F4EDED;"/>-->
<!--                    <path-->
<!--                        d="M248.611,209.528c-27.494,0-49.789,22.286-49.789,49.786c0,27.494,22.295,49.798,49.789,49.798c27.496,0,49.795-22.304,49.795-49.798C298.406,231.814,276.107,209.528,248.611,209.528z"-->
<!--                        style="fill:#5B5147;"/>-->
<!--                    <path-->
<!--                        d="M230.224,215.002c-14.401,0-26.065,11.674-26.065,26.067c0,14.399,11.664,26.073,26.065,26.073c14.391,0,26.065-11.674,26.065-26.073C256.289,226.676,244.614,215.002,230.224,215.002z"-->
<!--                        style="fill:#F4EDED;"/>-->
<!--                    <path-->
<!--                        d="M159.698,165.453h-45.712c-3.756,0-6.805,3.045-6.805,6.792v25.594c0,3.04,2.004,5.575,4.756,6.448c0.65,0.209,1.328,0.35,2.049,0.35h45.712c3.76,0,6.793-3.04,6.793-6.798v-25.594C166.491,168.498,163.458,165.453,159.698,165.453z"-->
<!--                        style="fill:#F4EDED;"/>-->
<!--                    <path-->
<!--                        d="M85.85,60.394c-9.086,7.86-17.596,16.37-25.456,25.456l349.914,349.914c9.086-7.861,17.596-16.37,25.456-25.456L85.85,60.394z"-->
<!--                        style="fill:#D61E1E;"/>-->
<!--                </svg>-->
<!--                <img class="h-10 w-10" v-else :src="resource.describe.url_image" alt="Folder"/>-->
<!--            </td>-->

            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <div class="flex item-center justify-center">
                    <a class="text-indigo-600 hover:text-indigo-900" href="#">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"/>
                            </svg>
                        </div>
                    </a>
                    <a class="text-yellow-600 hover:text-indigo-900" href="#">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"/>
                            </svg>
                        </div>
                    </a>
                    <a class="text-red-600 hover:text-indigo-900" href="#">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</template>
<script>
export default {
  name: "DescriptionTable",
  props: {
    data: Object
  }
};
</script>
