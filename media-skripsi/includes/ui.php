<?php
/**
 * Kelas Tailwind UI — Tema Merah SMK (konsisten di semua halaman)
 */
define('UI_BODY', 'antialiased min-h-screen flex flex-col bg-gray-50 text-gray-800');
define('UI_MAIN', 'flex-grow w-full');

define('UI_PAGE_WRAP', 'max-w-6xl mx-auto px-4 py-8 md:py-10');
define('UI_PAGE_HEAD', 'text-center mb-8 md:mb-10');
define('UI_PAGE_TITLE', 'text-2xl md:text-3xl font-bold text-red-800 mb-2');
define('UI_PAGE_SUB', 'text-gray-600 max-w-2xl mx-auto leading-relaxed');

define('UI_BADGE', 'inline-block bg-red-50 text-red-800 border border-red-200 px-3 py-1 rounded-lg text-xs font-semibold uppercase tracking-wide mb-4');

define('UI_CARD', 'bg-white rounded-lg shadow-md border border-gray-200');
define('UI_CARD_PAD', 'bg-white rounded-lg shadow-md border border-gray-200 p-6');

define('UI_BTN_PRIMARY', 'inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg bg-red-700 hover:bg-red-800 text-white font-semibold text-sm transition-colors cursor-pointer border-0');
define('UI_BTN_SECONDARY', 'inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 font-medium text-sm transition-colors cursor-pointer');

define('UI_BTN_BACK', 'inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-white/15 hover:bg-white/25 text-white text-sm font-medium border border-white/25 transition-colors cursor-pointer');
define('UI_BTN_BACK_LIGHT', 'inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-white border border-gray-300 text-red-800 hover:bg-red-50 text-sm font-medium transition-colors cursor-pointer');

define('UI_MODULE_GRID', 'grid grid-cols-1 sm:grid-cols-2 gap-4 max-w-4xl mx-auto');
define('UI_MODULE_CARD', 'flex items-start gap-4 bg-white rounded-lg shadow-md border border-gray-200 p-5 hover:border-red-300 transition-colors no-underline text-gray-800 group');
define('UI_MODULE_ICON', 'flex-shrink-0 w-11 h-11 flex items-center justify-center rounded-lg bg-red-50 text-red-700 text-lg group-hover:bg-red-100 transition-colors');

define('UI_TOPIC_GRID', 'grid grid-cols-2 sm:grid-cols-3 gap-3 max-w-4xl mx-auto w-full');
define('UI_TOPIC_BTN', 'flex flex-col items-center justify-center gap-2 min-h-[6.5rem] p-4 bg-white rounded-lg shadow-md border border-gray-200 text-sm font-semibold text-gray-800 hover:border-red-400 hover:bg-red-50 transition-colors cursor-pointer');

define('UI_INPUT', 'w-full px-3 py-2 rounded-lg border border-gray-300 text-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500');
define('UI_LABEL', 'block text-sm font-medium text-gray-700 mb-1');

define('UI_HEADER', 'sticky top-0 z-50 bg-red-800 text-white shadow-md border-b-4 border-red-700');
define('UI_FOOTER', 'text-center py-5 px-4 border-t border-gray-200 bg-white text-gray-500 text-sm');
