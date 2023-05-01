<script setup>
import { onMounted, ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import HeartOutline from 'vue-material-design-icons/HeartOutline.vue';
import ChartBar from 'vue-material-design-icons/ChartBar.vue';
import MessageOutline from 'vue-material-design-icons/MessageOutline.vue';
import Sync from 'vue-material-design-icons/Sync.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';
import TrashCanOutline from 'vue-material-design-icons/TrashCanOutline.vue';

defineProps({ tweet: Object });

let openOptions = ref(false);

</script>

<template>
    <div class="min-w-[60px]">
        <img class="rounded-full mt-2 mt-3" width="50" :src="tweet.image">
    </div>
    <div class="p-2 w-full">
        <div class="font-bold flex items-center justify-between mt-0 mb-1.5">
            <div class="flex items-center">
                <div>{{ tweet.name }}</div>
                <span class="font-[300] text-[15px] text-gray-500 pl-2">{{ tweet.handle }}</span>
            </div>
        </div>
    </div>
</template>
