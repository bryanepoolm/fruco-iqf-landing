<script setup lang="ts">
</script>

<template>
  <section id="ventajas" class="py-20 bg-white relative overflow-hidden">
    <!-- Decorative background -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-fruco-yellow/10 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-fruco-green/10 rounded-full blur-3xl -translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-6xl mx-auto px-4 relative z-10">
      <div class="text-center mb-16">
        <h2 class="text-4xl font-bold text-fruco-green-dark mb-4">¿Por qué elegir Fruco?</h2>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Nuestras ventajas competitivas nos convierten en su mejor aliado comercial.
        </p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-fruco-yellow transition-all duration-300 hover:-translate-y-2 group">
          <div class="w-16 h-16 bg-fruco-yellow/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-fruco-yellow/30 transition-colors">
            <span class="text-3xl">🇲🇽</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Origen 100% Mexicano</h3>
          <p class="text-gray-600 text-sm">Orgullosamente producimos y procesamos frutas de campos mexicanos.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-fruco-green transition-all duration-300 hover:-translate-y-2 group">
          <div class="w-16 h-16 bg-fruco-green/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-fruco-green/30 transition-colors">
            <span class="text-3xl">🔄</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Abastecimiento Continuo</h3>
          <p class="text-gray-600 text-sm">Garantizamos disponibilidad de producto durante todo el año.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-fruco-yellow transition-all duration-300 hover:-translate-y-2 group">
          <div class="w-16 h-16 bg-fruco-yellow/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-fruco-yellow/30 transition-colors">
            <span class="text-3xl">💰</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Precios Competitivos</h3>
          <p class="text-gray-600 text-sm">Ofrecemos la mejor relación calidad-precio del mercado.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:border-fruco-green-dark transition-all duration-300 hover:-translate-y-2 group">
          <div class="w-16 h-16 bg-fruco-green-dark/20 rounded-full flex items-center justify-center mb-6 group-hover:bg-fruco-green-dark/30 transition-colors">
            <span class="text-3xl">🚢</span>
          </div>
          <h3 class="text-xl font-bold text-gray-800 mb-3">Exportación a Gran Escala</h3>
          <p class="text-gray-600 text-sm">Capacidad logística para atender demandas internacionales.</p>
        </div>
      </div>
    </div>
  </section>
</template>
