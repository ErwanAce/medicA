@extends('dashboard.dashboars_layout')

@section('title', 'Admin | Dashboard')

@section('content')

<div class="container px-6 mx-auto grid">
    <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    Tableau de Bord Administrateur
  </h2>


  <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Table Des Patients</h4>
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
              <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Utilisateurs</th>
                      <th class="px-4 py-3">E-Mail</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                  </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach($patients as $patient)
                  <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                  <img class="object-cover w-full h-full rounded-full" src="{{ $patient->user->photo ?? 'https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=76&q=80'}}" alt="" loading="lazy" />
                                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                              </div>
                              <div>
                                  <p class="font-semibold">{{ $patient->user->nom }} {{ $patient->user->prenom }}</p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">{{ $patient->appointments_count }} Rendez-vous</p>
                              </div>
                          </div>
                      </td>
                      <td class="px-4 py-3 text-sm">{{ $patient->user->email }}</td>
                      <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              {{ $patient->user->status ?? 'Active' }}
                          </span>
                      </td>
                      <td class="px-4 py-3 text-sm">{{ $patient->user->created_at->format('d/m/Y') }}</td>
                      <td class="px-4 py-3">
                          <div class="flex items-center space-x-4 text-sm">
                              <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                  </svg>
                              </button>
                              <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                  </svg>
                              </button>
                          </div>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
      <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
          <span class="flex items-center col-span-3">Showing {{ $patients->firstItem() }}-{{ $patients->lastItem() }} of {{ $patients->total() }}</span>
          <span class="col-span-2"></span>
          <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
              {{ $patients->links() }}
          </span>
      </div>
  </div>


  <!-- Table Des Médecins -->
  <br>
  <br>
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Table Des Médecins
  </h4>
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
      <table class="w-full whitespace-no-wrap">
        <thead>
          <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">Médecins</th>
            <th class="px-4 py-3">E-Mail</th>
            <th class="px-4 py-3">Spécialité</th>
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">Date</th>
            <th class="px-4 py-3">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
          @foreach($doctors as $doctor)
          <tr class="text-gray-700 dark:text-gray-400">
            <td class="px-4 py-3">
              <div class="flex items-center text-sm">
                <!-- Avatar with inset shadow -->
                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="{{ asset('path_to_doctor_avatar/'.$doctor->user->avatar) }}" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold">{{ $doctor->user->nom }}</p>
                  <p class="text-xs text-gray-600 dark:text-gray-400">
                    {{ $doctor->appointments_count }} Rendez-vous
                  </p>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-sm">
              {{ $doctor->user->email }}
            </td>
            <td class="px-4 py-3 text-sm">
              {{ $doctor->specialty->name }}
            </td>
            <td class="px-4 py-3 text-xs">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                {{ $doctor->user->status ?? 'Active'}}
              </span>
            </td>
            <td class="px-4 py-3 text-sm">
              {{ $doctor->created_at->format('d/m/Y') }}
            </td>
            <td class="px-4 py-3">
              <div class="flex items-center space-x-4 text-sm">
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                  </svg>
                </button>
                <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                  <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
      <span class="flex items-center col-span-3">
        Showing {{ $doctors->firstItem() }}-{{ $doctors->lastItem() }} of {{ $doctors->total() }}
      </span>
      <span class="col-span-2"></span>
      <!-- Pagination -->
      <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
        {{ $doctors->links() }}
      </span>
    </div>
  </div>



</div>

@endsection
