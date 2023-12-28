<div class="px-4 sm:px-6 lg:px-8">
    <div class="flow-root">
      <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
          <table class="min-w-full divide-y divide-gray-300">
            <thead>
              <tr>
                <th scope="col" class="py-3.5 pl-4 pr-3 text-right text-sm font-semibold text-gray-900 sm:pl-0">رقم التسجيل</th>
                <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">الاسم الكامل</th>
                <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">تاريخ التسجيل</th>
                <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">المستوى الدراسي</th>
                <th scope="col" class="px-3 py-3.5 text-right text-sm font-semibold text-gray-900">الجنس</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
              @forelse ($students as $student)
              <tr>
                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $student['code'] }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $student['arName'] }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $student['dateInscription'] }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $student['level'] }}</td>
                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $student['sex'] }}</td>
                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                  <a href="{{ route('students.show',$student['id']) }}" class="bg-primary-color text-white px-3 py-1 rounded-lg text-xs font-semibold">
                    <i class="fa-solid fa-eye ml-2"></i>
                    التفاصيل 
                  </a>
                </td>
              </tr>
              @empty
                <tr class="py-4">
                  <td colspan="5">
                    <x-result-not-found></x-result-not-found>
                  </td>
                </tr>
                
              @endforelse
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="border-t pt-8 flex items-center justify-center">
      @if($pagination)
      {!! $students->render('custom-pagination') !!}
      @endif
    </div>
</div>
  