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
            <div class="hover:bg-gray-800 rounded-full cursor-pointer relative">
                <button type="button" class="block p-2">
                    <DotsHorizontal @click="openOptions = !openOptions" />
                </button>
                <div v-if="openOptions"
                    class="absolute mt-1 p-3 right-0 w-[300px] bg-black border bg-gray-700 rounded-lg shadow-lg">
                    <Link as="button" method="delete" :href="route('tweets.destroy', { id: tweet.id})"
                        class="flex items-center cursor-pointer" >
                        <TrashCanOutline class="pr-2" fillcolor="#DC2626" :size="18" />
                        <span class="text-red-600 hover:text-red-400 font-bold">Delete</span>
                    </Link>
                    <button type="button" class="text-gray-400 hover:text-gray-200 pl-6 pt-2" @click="openOptions = false">
                        Cancel
                    </button>
                </div>
            </div>
        </div>

        <div class="pb-3">{{ tweet.tweet }}</div>

        <div v-if="tweet.file">
            <div v-if="!tweet.is_video" class="rounded-xl">
                <img :src="tweet.file" class="mt-2 object-fill rounded-xl w-full">
            </div>
            <div v-else>
                <video class="rounded-xl" :src="tweet.file" controls></video>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4 w-4/5">
            <div class="flex">
                <MessageOutline fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-bold text-[#5e5c5c] ml-3">{{ tweet.comments }}</span>
            </div>
            <div class="flex">
                <Sync fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-bold text-[#5e5c5c] ml-3">{{ tweet.retweets }}</span>
            </div>
            <div class="flex">
                <HeartOutline fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-bold text-[#5e5c5c] ml-3">{{ tweet.likes }}</span>
            </div>
            <div class="flex">
                <ChartBar fillColor="#5e5c5c" :size="18" />
                <span class="text-xs font-bold text-[#5e5c5c] ml-3">{{ tweet.analytics }}</span>
            </div>
        </div>
    </div>
</template>
