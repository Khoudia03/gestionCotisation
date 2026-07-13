<?php

require_once(dirname(__DIR__)."/layouts/header.php");

?>


<div class="w-[300px] bg-ink rounded-[34px] p-2.5 shadow-[0_24px_48px_-18px_rgba(22,38,31,0.45)]">
  <div class="bg-papercard rounded-[26px] overflow-hidden min-h-[560px] flex flex-col relative">
    <div class="w-[90px] h-[22px] bg-ink rounded-b-[14px] mx-auto relative z-[2]"></div>
    <div class="px-5 pt-[18px] pb-[14px]">
      <div class="font-display font-semibold text-xl mb-[3px]">Supervision</div>
      <div class="text-[11.5px] text-inksoft font-mono">Coach · lecture seule</div>
    </div>
    <div class="border-t-2 border-dashed border-linestrong relative mt-0.5">
      <span class="absolute -top-1.5 -left-4 w-3 h-3 rounded-full bg-ink"></span>
      <span class="absolute -top-1.5 -right-4 w-3 h-3 rounded-full bg-ink"></span>
    </div>
    <div class="px-5 pt-[18px] pb-[26px] flex flex-col gap-4 flex-1">
      <div class="flex gap-2.5">
        <div class="flex-1 bg-white border border-line rounded-xl px-3 py-2.5 flex flex-col gap-[3px]"><span class="text-[9.5px] uppercase tracking-[.05em] text-inksoft font-semibold">Trésorerie</span><span class="font-mono font-semibold text-[15px] text-forest">486 000 F</span></div>
        <div class="flex-1 bg-white border border-line rounded-xl px-3 py-2.5 flex flex-col gap-[3px]"><span class="text-[9.5px] uppercase tracking-[.05em] text-inksoft font-semibold">Taux global</span><span class="font-mono font-semibold text-[15px]">82%</span></div>
        <div class="flex-1 bg-white border border-line rounded-xl px-3 py-2.5 flex flex-col gap-[3px]"><span class="text-[9.5px] uppercase tracking-[.05em] text-inksoft font-semibold">Retards</span><span class="font-mono font-semibold text-[15px] text-brick">6</span></div>
      </div>
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div class="text-[13px] font-semibold">Statistiques par mois</div>
        <div class="flex items-end gap-2.5 h-[90px]">
          <div class="flex flex-col items-center gap-1.5 flex-1"><div class="w-full max-w-[22px] bg-gold rounded-t-[5px] rounded-b-[2px]" style="height:52%;"></div><span class="text-[9px] text-inksoft font-mono">FEV</span></div>
          <div class="flex flex-col items-center gap-1.5 flex-1"><div class="w-full max-w-[22px] bg-gold rounded-t-[5px] rounded-b-[2px]" style="height:65%;"></div><span class="text-[9px] text-inksoft font-mono">MAR</span></div>
          <div class="flex flex-col items-center gap-1.5 flex-1"><div class="w-full max-w-[22px] bg-gold rounded-t-[5px] rounded-b-[2px]" style="height:44%;"></div><span class="text-[9px] text-inksoft font-mono">AVR</span></div>
          <div class="flex flex-col items-center gap-1.5 flex-1"><div class="w-full max-w-[22px] bg-gold rounded-t-[5px] rounded-b-[2px]" style="height:80%;"></div><span class="text-[9px] text-inksoft font-mono">MAI</span></div>
          <div class="flex flex-col items-center gap-1.5 flex-1"><div class="w-full max-w-[22px] bg-gold rounded-t-[5px] rounded-b-[2px]" style="height:58%;"></div><span class="text-[9px] text-inksoft font-mono">JUN</span></div>
          <div class="flex flex-col items-center gap-1.5 flex-1"><div class="w-full max-w-[22px] bg-gold rounded-t-[5px] rounded-b-[2px]" style="height:72%;"></div><span class="text-[9px] text-inksoft font-mono">JUL</span></div>
        </div>
      </div>
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div class="text-[13px] font-semibold">Audit — dernières transactions</div>
        <div class="flex items-center gap-3">
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Moussa Kane</b><span class="text-inksoft text-[11.5px]">Semaine 32</span></div>
          <span class="font-mono font-semibold [font-variant-numeric:tabular-nums]">2 000 F</span>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Fatou Sarr</b><span class="text-inksoft text-[11.5px]">Anniversaire Juin</span></div>
          <span class="font-mono font-semibold [font-variant-numeric:tabular-nums]">1 500 F</span>
        </div>
        <div class="flex items-center gap-3">
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Ibrahima Touré</b><span class="text-inksoft text-[11.5px]">Semaine 31</span></div>
          <span class="font-mono font-semibold [font-variant-numeric:tabular-nums]">2 000 F</span>
        </div>
      </div>
    </div>
    <div class="mt-auto flex justify-around px-2.5 pt-3 pb-4 border-t border-line bg-white">
      <a href="http://mami.cisse.odc.edu.sn/index.php?controller=coach&action=dashboardCoach" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-ink font-bold">Dashboard</span></a>
      <a href="http://mami.cisse.odc.edu.sn/index.php?controller=coach&action=audit" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-ink"></div><span class="text-[9px] text-inksoft font-medium">Audit</span></a>
      <a href="http://mami.cisse.odc.edu.sn/index.php?controller=coach&action=stats" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Stats</span></a>
      <a href="#" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Profil</span></a>
    </div>
  </div>
</div>