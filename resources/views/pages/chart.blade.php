@extends('dashboard')

@section('chart')
    <div>
        <div class="overflow-hidden">
            <div class="py-3 px-5 bg-white">THỐNG KÊ LỖI PHÒNG MÁY</div>
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-3">
                    {{-- Biểu đồ --}}
                    <canvas class="px-10" id="chartBar"></canvas>
                </div>
                <div class="col-span-1">
                    <!-- Thống kê số liệu -->
                    <div class="max-w-full mx-4 py-6 sm:mx-auto sm:px-6 lg:px-8">
                        <div class="flex flex-col">
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full ">
                                <div class="bg-white p-5">
                                    <div class="sm:flex sm:items-start">
                                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                            <h3 class="text-sm leading-6 font-medium text-gray-400">Total Subscribers</h3>
                                            <p class="text-2xl font-bold text-black">71,897</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full ">
                                <div class="bg-white p-5">
                                    <div class="sm:flex sm:items-start">
                                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                            <h3 class="text-sm leading-6 font-medium text-gray-400">Avg. Open Rate</h3>
                                            <p class="text-2xl font-bold text-black">58.16%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full ">
                                <div class="bg-white p-5">
                                    <div class="sm:flex sm:items-start">
                                        <div class="text-center sm:mt-0 sm:ml-2 sm:text-left">
                                            <h3 class="text-sm leading-6 font-medium text-gray-400">Avg. Click Rate</h3>
                                            <p class="text-2xl font-bold text-black">24.57%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow transform transition-all mb-4 w-full ">
                                <a href="#"
                                    class="w-full bg-green-500
                                    hover:bg-green-600 text-gray-50 font-bold py-2 px-4 rounded inline-flex justify-center
                                    items-center">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
                                    </svg>
                                    <span>Xuất file Excel</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart bar -->
        <script>
            const labelsBarChart = [
                "Tháng 1",
                "Tháng 2",
                "Tháng 3",
                "Tháng 4",
                "Tháng 5",
                "Tháng 6",
                "Tháng 7",
                "Tháng 8",
                "Tháng 9",
                "Tháng 10",
                "Tháng 11",
                "Tháng 12",
            ];
            const dataBarChart = {
                labels: labelsBarChart,
                datasets: [{
                    label: "Lỗi gặp phải",
                    backgroundColor: "hsl(206, 100%, 50%)",
                    borderColor: "hsl(252, 82.9%, 67.8%)",
                    data: [5, 10, 45, 13, 70, 40, 16, 32, 3, 95, 15, 40, 100],
                }, ],
            };

            const configBarChart = {
                type: "bar",
                data: dataBarChart,
                options: {},
            };

            var chartBar = new Chart(
                document.getElementById("chartBar"),
                configBarChart
            );
        </script>
    </div>
@endsection
