@extends('layouts.app')

@section('title', 'Blm')

@section('content')
<!-- Header area for tabs -->
<header class="bg-surface-container-lowest border-b border-outline-variant px-margin-desktop py-lg sticky top-0 z-30">
<h1 class="font-headline-md text-headline-md font-bold text-primary mb-md">Audit &amp; Aspirations</h1>
<div class="flex space-x-lg border-b border-outline-variant">
<button class="tab-btn font-label-md text-label-md py-sm px-xs border-b-2 border-transparent text-on-surface-variant hover:text-primary transition-colors" data-target="tab-aspirations">
                    Aspirations
                </button>
<button class="tab-btn font-label-md text-label-md py-sm px-xs border-b-2 border-primary text-primary font-bold" data-target="tab-audit">
                    BEM Audit
                </button>
</div>
</header>
<div class="p-margin-desktop max-w-max-width mx-auto w-full">
<!-- Tab 1: Aspirations -->
<section class="tab-content" id="tab-aspirations">
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Date</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Student ID</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Subject</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Status</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant font-body-sm text-body-sm">
<tr class="hover:bg-surface-bright transition-colors">
<td class="p-md font-display text-sm tracking-tight text-slate-text">2023-10-24</td>
<td class="p-md font-display text-sm tracking-tight text-slate-text">205150200111001</td>
<td class="p-md text-on-surface">More seating in lobby</td>
<td class="p-md">
<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-secondary-fixed text-secondary-fixed-dim">
                                            Proses
                                        </span>
</td>
<td class="p-md text-right space-x-sm">
<select class="border border-outline-variant rounded px-2 py-1 text-sm bg-surface-container-lowest">
<option>Belum Dimulai</option>
<option selected="">Proses</option>
<option>Selesai</option>
</select>
<button class="bg-primary text-on-primary px-3 py-1 rounded text-sm hover:bg-primary-fixed hover:text-on-primary-fixed transition-colors">Reply</button>
</td>
</tr>
<tr class="bg-surface-bright hover:bg-surface-container-low transition-colors">
<td class="p-md font-display text-sm tracking-tight text-slate-text">2023-10-22</td>
<td class="p-md font-display text-sm tracking-tight text-slate-text">205150200111055</td>
<td class="p-md text-on-surface">Library WiFi issues</td>
<td class="p-md">
<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-error-container text-on-error-container">
                                            Belum Dimulai
                                        </span>
</td>
<td class="p-md text-right space-x-sm">
<select class="border border-outline-variant rounded px-2 py-1 text-sm bg-surface-container-lowest">
<option selected="">Belum Dimulai</option>
<option>Proses</option>
<option>Selesai</option>
</select>
<button class="bg-primary text-on-primary px-3 py-1 rounded text-sm hover:bg-primary-fixed hover:text-on-primary-fixed transition-colors">Reply</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
<!-- Tab 2: BEM Audit -->
<section class="tab-content active space-y-lg" id="tab-audit">
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Program Name</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Ministry</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Date Executed</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider">Status</th>
<th class="p-md font-label-sm text-label-sm uppercase text-on-surface-variant tracking-wider text-right">Documents</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant font-body-sm text-body-sm">
<tr class="hover:bg-surface-bright transition-colors cursor-pointer" onclick="selectProgram('Tech Talk 2023')">
<td class="p-md font-medium text-on-surface">Tech Talk 2023</td>
<td class="p-md text-on-surface-variant">Ristek</td>
<td class="p-md font-display text-sm tracking-tight text-slate-text">2023-09-15</td>
<td class="p-md">
<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-tertiary-fixed text-on-tertiary-fixed">
                                            Under Review
                                        </span>
</td>
<td class="p-md text-right space-x-sm">
<button class="border border-primary-container text-primary-container px-3 py-1 rounded text-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">LPJ</button>
<button class="border border-primary-container text-primary-container px-3 py-1 rounded text-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">Receipts</button>
</td>
</tr>
<tr class="bg-surface-bright hover:bg-surface-container-low transition-colors cursor-pointer" onclick="selectProgram('Sports Fest')">
<td class="p-md font-medium text-on-surface">Sports Fest</td>
<td class="p-md text-on-surface-variant">Pemuda &amp; Olahraga</td>
<td class="p-md font-display text-sm tracking-tight text-slate-text">2023-08-20</td>
<td class="p-md">
<span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-secondary-fixed text-secondary-fixed-dim">
                                            Revisions Needed
                                        </span>
</td>
<td class="p-md text-right space-x-sm">
<button class="border border-primary-container text-primary-container px-3 py-1 rounded text-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">LPJ</button>
<button class="border border-primary-container text-primary-container px-3 py-1 rounded text-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">Receipts</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<!-- Evaluation Panel -->
<div class="bg-surface-container-lowest border border-outline-variant rounded-lg p-lg">
<h3 class="font-headline-sm text-headline-sm font-bold text-primary mb-sm">Evaluation Panel</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-md">Target: <span class="font-semibold text-on-surface" id="selected-program">Select a program</span></p>
<form action="#" class="space-y-md">
<div>
<label class="block font-label-sm text-label-sm uppercase text-on-surface-variant mb-xs" for="evaluation">Send Evaluation/Revision Note</label>
<textarea class="w-full border border-outline-variant rounded bg-surface-container-lowest p-sm font-body-sm text-on-surface focus:ring-1 focus:ring-primary focus:border-primary" id="evaluation" name="evaluation" placeholder="Enter detailed notes regarding LPJ or receipts..." rows="4"></textarea>
</div>
<div class="flex justify-end space-x-sm">
<button class="border border-outline-variant text-on-surface-variant px-4 py-2 rounded font-label-md hover:bg-surface-container-low transition-colors" type="button">Cancel</button>
<button class="bg-secondary-container text-on-secondary-container px-4 py-2 rounded font-label-md hover:bg-secondary-fixed transition-colors" type="submit">Send Evaluation</button>
</div>
</form>
</div>
</section>
</div>
@endsection
