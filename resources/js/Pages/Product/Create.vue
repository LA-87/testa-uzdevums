<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    count: 0,
    price: 1,
});

const createProduct = () => {
    form.post(route('product.store'), {
        onFinish: () => {
            console.log('done')
        },
    });
};

</script>

<template>
    <Head title="Izveidot jaunu producktu"/>

    <AuthenticatedLayout>

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 py-12">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Jauna produkta izveidošana</h3>

                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form @submit.prevent="createProduct">
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div>
                                    <InputLabel for="name" class="block text-sm font-medium text-gray-700" value="Nosaukums" />

                                    <TextInput
                                        id="name"
                                        type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        v-model="form.name"
                                        required
                                    />

                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>

                                <div>
                                    <InputLabel for="name" class="block text-sm font-medium text-gray-700" value="Daudzums" />

                                    <TextInput
                                        id="name"
                                        type="number"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        v-model="form.count"
                                        required
                                    />

                                    <InputError class="mt-2" :message="form.errors.count" />
                                </div>

                                <div>
                                    <InputLabel for="name" class="block text-sm font-medium text-gray-700" value="Cena" />

                                    <TextInput
                                        id="name"
                                        type="number"
                                        step="0.01"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        v-model="form.price"
                                        required
                                    />

                                    <InputError class="mt-2" :message="form.errors.price" />
                                </div>

                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit"
                                        class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Saglabāt
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </AuthenticatedLayout>
</template>
