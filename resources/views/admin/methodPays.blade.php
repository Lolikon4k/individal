<div class="your-table-container ">
    <div class="section__title my-10 section__title-primogemes">
        <span>Добавление метода оплаты</span>
    </div>
    <form action="/addMethodPays" class="my-10" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5 text-center">
            <input type="text" name="nameMethods" placeholder="Название оплаты"
                class="w-[550px] rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @error('nameMethods')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="seclect-type-pay text-center ">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Выберите тип
                оплаты</label>
            <select id="countries" name="type_pays"
                class="bg-white block mx-auto mb-10 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[300px] p-2.5">
                <option selected>Выберите тип оплаты</option>

                @foreach ($type_pays as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach

            </select>
            @error('type_pays')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="seclect-type-pay text-center ">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Добавьте
                изображение</label>
            <input type="file" name="image"
                class="w-[300px] mb-10 rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-black outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @error('image')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <input type="submit" value="Добавить"
                class="hover:shadow-form block mx-auto rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
            </button>
        </div>
    </form>

</div>