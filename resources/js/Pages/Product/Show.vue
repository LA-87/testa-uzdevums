<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';

const props = defineProps({
    product: Object,
})

</script>

<template>
    <Head title="Izveidot jaunu producktu"/>

    <AuthenticatedLayout>

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-12">
            <div class="mt-5 md:col-span-2 md:mt-0">

                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Produckta informācija</h3>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                            <dl class="sm:divide-y sm:divide-gray-200">
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Nosaukums</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{ product.name }}</dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Daudzums</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{
                                            product.count
                                        }}
                                    </dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Cena</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{
                                            product.price
                                        }}
                                    </dd>
                                </div>
                                <div class="py-4 sm:grid sm:grid-cols-3 sm:gap-4 sm:py-5 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Kopējā cena ar PVN</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">{{
                                            product.total_price_with_tax
                                        }}
                                    </dd>
                                </div>

                            </dl>
                        </div>
                    </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
