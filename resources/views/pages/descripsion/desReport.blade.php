@extends('dashboard')

@section('desReport')
    {{--  --}}
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="flex items-center px-4 py-5 sm:px-6">
            <div class="mr-4">
                <img src="{{ asset('/images/logo.webp') }}" alt="logo" width="60px">
            </div>
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900 uppercase">Thông tin phản ánh</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Phòng máy trường Đại học Trà Vinh</p>
            </div>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Người phản ánh</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Margot Foster</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Application for</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Backend Developer</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Email address</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">margotfoster@example.com</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">$120,000</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">About</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute
                        sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint.
                        Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad
                        adipisicing reprehenderit deserunt qui eu.</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                    <dd class="mt-1 lg:w-56 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="VN" selected>Chưa xử lý</option>
                            <option value="US">Đang xử lý</option>
                            <option value="CA">Đã xử lý</option>
                        </select>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
@endsection
