@extends('dashboard.dashboars_layout')

@section('title', 'Doctor | Dashboard')

@section('content')

<div class="container px-6 mx-auto grid">
    <h2
    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
  >
    Tableau de Bord
  </h2>
   <!-- Cards -->
   <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <!-- Card -->
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path
            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
          ></path>
        </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
        Total Patients
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
        {{ $treatedPatientsCount }}
        </p>
      </div>
    </div>
    <!-- Card -->
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"
      >
      <svg
      class="w-5 h-5"
      aria-hidden="true"
      fill="none"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
      ></path>
    </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
          Total Rendez-vous
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
        {{ $appointmentsCount }}
        </p>
      </div>
    </div>
    <!-- Card -->
    <div
      class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
    >
      <div
        class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"
      >
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path
            fill-rule="evenodd"
            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </div>
      <div>
        <p
          class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"
        >
          Rendez-vous A Venir
        </p>
        <p
          class="text-lg font-semibold text-gray-700 dark:text-gray-200"
        >
        {{ $upcomingAppointmentsCount }}
        </p>
      </div>
    </div>
  </div>


  <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">Table Des Patients</h4>
  <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
          <table class="w-full whitespace-no-wrap">
              <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                      <th class="px-4 py-3">Identite</th>
                      <th class="px-4 py-3">E-Mail</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                  </tr>
              </thead>
              <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                  @foreach($patients as $appointment)
                  <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                  <img class="object-cover w-full h-full rounded-full" src="{{ $appointment->patient->user->photo ?? 'default_image_url' }}" alt="" loading="lazy" />
                              </div>
                              <div>
                                  <p class="font-semibold">{{ $appointment->patient->user->nom }} {{ $appointment->patient->user->prenom }}</p>
                                  <p class="text-xs text-gray-600 dark:text-gray-400">{{ $appointment->patient->appointments->count() }} Rendez-vous</p>
                              </div>
                          </div>
                      </td>
                      <td class="px-4 py-3 text-sm">{{ $appointment->patient->user->email }}</td>
                      <td class="px-4 py-3 text-xs">
                          <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                              {{ $appointment->patient->user->status ?? 'Active' }}
                          </span>
                      </td>
                      <td class="px-4 py-3 text-sm">{{ $appointment->appointment_time->format('d/m/Y') }}</td>
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


</div>


</div>

@endsection
