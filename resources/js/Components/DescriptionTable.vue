<template>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                Name
            </th>
            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider" scope="col">
                Actions
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        <tr v-for="resource in data" :key="resource.id">
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-center text-sm font-medium text-gray-900">{{ resource.describe.name }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <div class="flex item-center justify-center">
                    <inertia-link :href="route(routeName + '.show', resource.id)"
                                  class="text-blue-600 hover:text-blue-900">
                        <div class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
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
                    </inertia-link>
                    <inertia-link :href="route(routeName + '.edit', resource.id)"
                                  class="text-yellow-600 hover:text-yellow-900">
                        <div class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"/>
                            </svg>
                        </div>
                    </inertia-link>
                    <inertia-link :href="route(routeName + '.destroy', resource.id)"
                                  class="text-red-600 hover:text-red-900">
                        <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"/>
                            </svg>
                        </div>
                    </inertia-link>
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
    data: Object,
    routeName: String,
  },
};
</script>
