<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            企業一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <x-flash-message status="info" />
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <section class="text-gray-600 body-font">
                <div class="container px-5 py-4 mx-auto">
                      <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                          <thead>
                            <tr>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">企業名</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Eメール</th>
                              <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">作成日</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($companies as $company)
                            <tr>
                              <td class="px-4 py-3">{{ $company->name }}</td>
                              <td class="px-4 py-3">{{ $company->email }}</td>
                              <td class="px-4 py-3">{{ $company->created_at }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
