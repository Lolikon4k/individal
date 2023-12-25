<div class="your-table-container ">
    <div class="section__title my-10 section__title-primogemes">
        <span>Редактирование жанра</span>
    </div>
    <table class="min-w-full my-10">
        <thead class="border-b">
            <tr>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-left">
                    #
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Название
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Редактировать
                </th>
                <th scope="col" class="text-sm font-medium text-white px-6 py-4 text-center">
                    Удалить
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $item)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium white">{{ $item->id }}</td>
                    <td class="text-sm white font-light whitespace-nowrap">
                        <form id="publishersForm{{ $item->id }}" action="/redactPublishers/{{ $item->id }}"
                            class="my-10" method="POST">
                            @csrf
                            <div class="mb-5 text-center">
                                <input type="text" name="name" placeholder="Название жанра"
                                    value="{{ $item->title }}"
                                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </form>
                    </td>
                    <td class="text-sm white font-light whitespace-nowrap">
                        <button type="submit" form="publishersForm{{ $item->id }}"
                            class="group block mx-auto relative h-10 w-40 overflow-hidden rounded-2xl bg-green-500 text-sm font-bold text-white text-center">
                            Сохранить
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button>
                    </td>
                    <td class="text-sm white font-light whitespace-nowrap">
                        <a href="deletePublishers/{{ $item->id }}"
                            class="group flex items-center justify-center text-center mx-auto relative h-10 w-40 overflow-hidden rounded-2xl bg-red-500 text-sm font-bold text-white">
                            Удалить
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-300 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $publishers->links() }}
    </div>
</div>
<script>
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();

        var url = $(this).attr('href');
        getResults(url);
    });

    function getResults(url) {
        $.ajax({
            url: url,
            type: "get",
            datatype: "html"
        }).done(function(data) {
            $('.your-table-container').html(data);
            // При необходимости вы можете выполнить другие действия после обновления содержимого
        });
    }
</script>
