<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            ユーザー一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-flash-message status="session('status')" />
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:p-6 bg-white border-b border-gray-200">
                    <section class="text-gray-600 body-font">
                        <div class="container md:px-5 py-4 mx-auto">
                            <div class="w-full mx-auto overflow-auto">
                                <table class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                        <tr>
                                            <th
                                                class="md:px-4 px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                                ユーザー名</th>
                                            <th
                                                class="md:px-4 px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                Eメール</th>
                                            <th
                                                class="md:px-4 px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                作成日</th>
                                            <th
                                                class="md:px-4 px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                                更新日</th>
                                            <th
                                                class="md:px-4 px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td class="md:px-4 px-2 py-3">{{ $user->name }}</td>
                                                <td class="md:px-4 px-2 py-3">{{ $user->email }}</td>
                                                <td class="md:px-4 px-2 py-3">{{ $user->created_at }}</td>
                                                <td class="md:px-4 px-2 py-3">{{ $user->updated_at }}</td>
                                                <td class="md:px-4 px-2 py-3">
                                                    <button type="button"
                                                        onclick="location.href='{{ route('admin.users.show', ['user' => $user->id]) }}'"
                                                        class="bg-blue-300 border-0 py-2 px-8 focus:outline-none hover:bg-blue-400 rounded">詳細</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
