@extends('layouts.app')

@section('title', 'Student')

@section('content')
<!-- Submission Form Column (Bento Style) -->
<section class="md:col-span-5 flex flex-col gap-lg">
<div class="bg-surface-container-lowest border border-surface-variant rounded-xl p-lg flex flex-col gap-md">
<h2 class="font-headline-sm text-headline-sm text-primary">Voice Your Aspirations</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Submit your feedback, concerns, or ideas for the faculty. Your voice matters.</p>
<form class="flex flex-col gap-md mt-md">
<div class="flex flex-col gap-sm">
<label class="font-label-sm text-label-sm uppercase text-on-surface-variant">Title</label>
<input class="border border-surface-variant rounded bg-surface-container-lowest px-md py-sm font-body-sm text-body-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all" placeholder="Short description of your aspiration" type="text"/>
</div>
<div class="flex flex-col gap-sm">
<label class="font-label-sm text-label-sm uppercase text-on-surface-variant">Category</label>
<select class="border border-surface-variant rounded bg-surface-container-lowest px-md py-sm font-body-sm text-body-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all appearance-none">
<option value="">Select a category</option>
<option value="academic">Academic</option>
<option value="facilities">Facilities</option>
<option value="finance">Finance</option>
</select>
</div>
<div class="flex flex-col gap-sm">
<label class="font-label-sm text-label-sm uppercase text-on-surface-variant">Description</label>
<textarea class="border border-surface-variant rounded bg-surface-container-lowest px-md py-sm font-body-sm text-body-sm focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all resize-none" placeholder="Provide detailed information..." rows="4"></textarea>
</div>
<div class="flex flex-col gap-sm">
<label class="font-label-sm text-label-sm uppercase text-on-surface-variant">Supporting Documents (Optional)</label>
<button class="border border-primary text-primary font-label-md text-label-md rounded px-md py-sm flex items-center justify-center gap-sm hover:bg-surface-container-low transition-colors w-fit" type="button">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">upload_file</span>
                             Upload File
                         </button>
</div>
<div class="flex items-center gap-sm mt-sm">
<input class="rounded border-surface-variant text-primary focus:ring-primary" id="anonymous" type="checkbox"/>
<label class="font-body-sm text-body-sm" for="anonymous">Submit Anonymously</label>
</div>
<button class="bg-[#d4af37] text-primary-fixed-variant font-label-md text-label-md rounded px-lg py-md mt-md hover:bg-secondary-fixed transition-colors" type="button">
                        Submit Aspiration
                    </button>
</form>
</div>
</section>
<!-- History Section Column -->
<section class="md:col-span-7 flex flex-col gap-lg">
<div class="bg-surface-container-lowest border border-surface-variant rounded-xl p-lg flex flex-col h-full">
<h2 class="font-headline-sm text-headline-sm text-primary mb-md">My Aspiration History</h2>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-surface-variant">
<th class="py-sm px-sm font-label-sm text-label-sm uppercase text-on-surface-variant font-medium">Date</th>
<th class="py-sm px-sm font-label-sm text-label-sm uppercase text-on-surface-variant font-medium">Title</th>
<th class="py-sm px-sm font-label-sm text-label-sm uppercase text-on-surface-variant font-medium">Category</th>
<th class="py-sm px-sm font-label-sm text-label-sm uppercase text-on-surface-variant font-medium">Status</th>
<th class="py-sm px-sm font-label-sm text-label-sm uppercase text-on-surface-variant font-medium">BLM Response</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
<td class="py-md px-sm font-body-sm text-body-sm font-headline-lg font-mono">2024-05-12</td>
<td class="py-md px-sm font-body-sm text-body-sm font-medium">Library AC Breakdown</td>
<td class="py-md px-sm font-body-sm text-body-sm">Facilities</td>
<td class="py-md px-sm">
<span class="inline-flex items-center px-2 py-1 rounded bg-green-100 text-green-800 font-label-sm text-[10px] uppercase">Closed</span>
</td>
<td class="py-md px-sm font-body-sm text-body-sm text-on-surface-variant line-clamp-2">Repairs completed on May 10th.</td>
</tr>
<tr class="border-b border-surface-variant hover:bg-surface-container-low transition-colors">
<td class="py-md px-sm font-body-sm text-body-sm font-headline-lg font-mono">2024-05-18</td>
<td class="py-md px-sm font-body-sm text-body-sm font-medium">More practical lab sessions</td>
<td class="py-md px-sm font-body-sm text-body-sm">Academic</td>
<td class="py-md px-sm">
<span class="inline-flex items-center px-2 py-1 rounded bg-yellow-100 text-yellow-800 font-label-sm text-[10px] uppercase">Under Review</span>
</td>
<td class="py-md px-sm font-body-sm text-body-sm text-on-surface-variant line-clamp-2">Discussing with Kajur regarding schedule adjustments.</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-md px-sm font-body-sm text-body-sm font-headline-lg font-mono">2024-05-20</td>
<td class="py-md px-sm font-body-sm text-body-sm font-medium">Delay in UKT updates</td>
<td class="py-md px-sm font-body-sm text-body-sm">Finance</td>
<td class="py-md px-sm">
<span class="inline-flex items-center px-2 py-1 rounded bg-blue-100 text-blue-800 font-label-sm text-[10px] uppercase">Submitted</span>
</td>
<td class="py-md px-sm font-body-sm text-body-sm text-on-surface-variant line-clamp-2">-</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
@endsection
