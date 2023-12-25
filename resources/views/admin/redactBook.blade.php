@extends('layouts.app')
@section('content')
    <div class="your-table-container ">
        <div class="section__title my-10 section__title-primogemes">
            <span>Редактирование книги</span>
        </div>

        <form id="redact_book-form" action="/RedactBookForm" class="my-10" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-5 text-center">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название
                    книги</label>
                <input type="text" name="name" placeholder="Название книги" value="{{ $books->name }}"
                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text name_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>

            <div class="mb-5 text-center">
                <label for="countries"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Стоимость</label>
                <input type="text" name="cost" placeholder="Стоимость книги" value="{{ $books->cost }}"
                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text cost_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>

            <div class="seclect-type-pay text-center">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Выберите жанр
                    книги</label>
                <div class="section-janrs flex flex-wrap w-80 mx-auto">
                    @foreach ($janrs as $item)
                        <div class="flex items-center w-[100px] mb-4 mx-5">
                            <input class="mx-3" id="default-checkbox{{ $item->id }}" type="checkbox" name="genres[]"
                                value="{{ $item->id }}"
                                {{ in_array($item->id, array_column($janrs_to_books->toArray(), 'id_janr')) ? 'checked' : '' }}>
                            <label for="default-checkbox{{ $item->id }}">{{ $item->title }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mb-5 text-center">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>

                <input type="text" name="description" placeholder="Описание" value="{{ $books->description }}"
                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text description_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>

            <div class="mb-5 text-center">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Автор</label>

                <input type="text" name="author" placeholder="Автор" value="{{ $books->author }}"
                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text author_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>
            <div class="mb-5 text-center">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Дата
                    публикации</label>
                <input type="date" name="YearPublishing" value="{{ $books->YearPublishing }}"
                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text YearPublishing_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>
            <div class="mb-5 text-center">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Количество
                    страниц</label>

                <input type="number" name="contPages" value="{{ $books->contPages }}"
                    class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                    placeholder="Количество страниц" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text contPages_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>
            <div class="seclect-type-pay text-center ">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Добавьте
                    изображение</label>
                <input type="file" name="imageBook"
                    class="w-[300px] mb-10 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text imageBook_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>

            <div class="seclect-type-pay text-center ">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Добавьте
                    файл книги</label>
                <input type="file" name="bookNameDownload"
                    class="w-[300px] mb-10 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" />
                <span
                    class="text-danger w-[50%] mx-auto my-4 bookNameDownload-text imageBook_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>

            </div>

            <div class="seclect-type-pay text-center ">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Редакция</label>
                <select id="countries" name="id_publisher"
                    class="bg-white block mx-auto mb-10 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[300px] p-2.5">
                    <option selected>Выберите редакцию</option>

                    @foreach ($publishers as $item)
                        <option {{ $books->id_publisher == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                            {{ $item->title }}</option>
                    @endforeach

                </select>
                <span
                    class="text-danger w-[50%] mx-auto my-4 error-text imageBook_error none bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700"></span>


            </div>

            <input type="submit" value="Добавить"
                class="hover:shadow-form block mx-auto rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
        </form>

    </div>

    {{-- 
<script>
    $(function() {
        $('#new_book-form').on('submit', function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                data: new FormData(this),
                processData: false,
                dataType: 'json',
                contentType: false,
                beforeSend: function() {
                    $('.error-text').hide();
                },
                success: function(data) {
                    if (data.success) {
                        window.location.href = '/';
                    }
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON.errors;
                    console.log(errors)
                    $('.name_error').text(errors.name ? errors.name[0] : '');
                    $('.name_error').css('display', 'flex');

                    $('.cost_error').text(errors.cost ? errors.cost[0] : '');
                    $('.cost_error').css('display', 'flex');

                    $('.description_error').text(errors.description ? errors.description[
                        0] : '');
                    $('.description_error').css('display', 'flex');

                    $('.author_error').text(errors.author ? errors.author[0] : '');
                    $('.author_error').css('display', 'flex');

                    $('.YearPublishing_error').text(errors.YearPublishing ? errors
                        .YearPublishing[0] : '');
                    $('.YearPublishing_error').css('display', 'flex');

                    $('.contPages_error').text(errors.contPages ? errors.contPages[0] : '');
                    $('.contPages_error').css('display', 'flex');

                    $('.imageBook_error').text(errors.imageBook ? errors.imageBook[0] : '');
                    $('.imageBook_error').css('display', 'flex');

                    $('.bookNameDownload_error').text(errors.bookNameDownload ? errors
                        .bookNameDownload[0] : '');
                    $('.bookNameDownload_error').css('display', 'flex');

                    $('.id_publisher_error').text(errors.id_publisher ? errors.id_publisher[
                        0] : '');
                    $('.id_publisher_error').css('display', 'flex');
                }
            });
            return false;
        });
    });
</script> --}}
@endsection('content')
