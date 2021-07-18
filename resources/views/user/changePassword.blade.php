<!DOCTYPE html>
<html lang="fa">

<x-app-layout>
    <x-slot name="header">
        <h2 style="float: right" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('تغییر رمز عبور') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="float: right">
                    <form method="POST" action="{{ route('changePassword') }}">
                    @csrf
                        <!--old Password -->
                        <div class="mt-4" style="text-align: right">
                            <x-label for="oldpassword" :value="__('رمز عبور')" />

                            <x-input id="oldpassword" class="block mt-1 w-full" type="password" name="oldpassword" required />
                        </div>

                        <!-- new Password -->
                        <div class="mt-4" style="text-align: right">
                            <x-label for="newpassword" :value="__(' رمز عبور جدید')" />

                            <x-input id="newpassword" class="block mt-1 w-full"
                                     type="password"
                                     name="newpassword" required />
                        </div>
                        <!-- Confirm Password -->
                        <div class="mt-4" style="text-align: right">
                            <x-label for="password_confirmation" :value="__('تکرار رمز عبور')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                     name="password_confirmation" required />
                        </div>

                        <div class="flex justify-end mt-4" style="float: left">
                            <x-button>
                                {{ __('تغییر رمز عبور') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</html>