<template>
  <div>
    <a
        ref="btnDropdownRef"
        class="text-blueGray-500 block"
        href="#"
        @click="toggleDropdown($event)"
    >
      <div class="items-center flex">
        <span
            class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
        >
          <img
              :src="$page.props.user.profile_photo_url"
              alt="..."
              class="w-full rounded-full align-middle border-none shadow-lg"
          />
        </span>
      </div>
    </a>
    <div
        ref="popoverDropdownRef"
        class="bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
        v-bind:class="{
                hidden: !dropdownPopoverShow,
                block: dropdownPopoverShow,
            }"
    >
      <inertia-link
          :href="route('profile.show')"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
      >
        Profile
      </inertia-link>
      <inertia-link
          v-if="$page.props.jetstream.hasApiFeatures"
          :href="route('api-tokens.index')"
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
      >
        API Tokens
      </inertia-link>
      <div class="h-0 my-2 border border-solid border-blueGray-100"/>
      <a
          class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
          href="#"
          @click="logout"
      >
        Log Out
      </a>
    </div>
  </div>
</template>

<script>
import {createPopper} from "@popperjs/core";

export default {
  data() {
    return {
      dropdownPopoverShow: false,
    };
  },
  methods: {
    toggleDropdown(event) {
      event.preventDefault();
      if (this.dropdownPopoverShow) {
        this.dropdownPopoverShow = false;
      } else {
        this.dropdownPopoverShow = true;
        createPopper(this.$refs.btnDropdownRef, this.$refs.popoverDropdownRef, {
          placement: "bottom-start",
        });
      }
    },
    logout() {
      this.$inertia.post(route("logout"));
    },
  },
  mounted() {
    console.log(this.$page.props);
  }
};
</script>
