<div class="min-h-screen bg-linear-to-br from-blue-50 to-indigo-100 px-4 py-14">
    <div class="mx-auto w-full max-w-4xl space-y-8">
        <header class="space-y-2 text-center">
            <h1 class="text-3xl font-semibold text-zinc-900">Consulta de CNPJ</h1>
            <p class="text-base text-slate-600">Digite o CNPJ da empresa para visualizar suas informações</p>
        </header>

        <form action="#" method="get" class="rounded-xl bg-white p-6 shadow-lg shadow-slate-300/50">
            <div class="flex flex-col gap-3 sm:flex-row">
                <input type="text" id="cnpj" name="cnpj" placeholder="62.010.171/0001-59" aria-label="CNPJ"
                    class="h-12 flex-1 rounded-lg border border-transparent bg-zinc-100 px-4 text-sm text-zinc-500 outline-none">

                <button type="submit"
                    class="inline-flex h-12 items-center justify-center gap-2 rounded-lg bg-zinc-950 px-5 text-sm font-medium text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" class="size-4">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    Buscar
                </button>
            </div>
        </form>

        <?php if (isset($dados['error'])): ?>
            <div class="rounded-xl bg-red-50 p-4">
                <p class="text-sm text-red-700">
                    Erro ao consultar CNPJ:
                    <?= $dados['error'] ?>
                </p>
            </div>
        <?php elseif (isset($dados['cnpj'])): ?>
            <section class="space-y-4">
                <article class="rounded-2xl border border-zinc-200 bg-white p-6">
                    <h2 class="mb-5 inline-flex items-center gap-2 text-base font-medium text-zinc-900">
                        <span>🏢</span> Identificação da empresa
                    </h2>
                    <div class="grid gap-3 text-base text-zinc-900 sm:grid-cols-2">
                        <p><span class="font-semibold">CNPJ:</span>
                            <?= $dados['cnpj'] ?? '' ?>
                        </p>
                        <p><span class="font-semibold">Tipo:</span>
                            <?= $dados['tipo'] ?? '' ?>
                        </p>
                        <p class="sm:col-span-2"><span class="font-semibold">Razão Social:
                            </span><?= $dados['nome'] ?? '' ?>
                        </p>
                        <p class="sm:col-span-2"><span class="font-semibold">Natureza Jurídica: </span>
                            <?= $dados['natureza_juridica'] ?? 'Empresário individual' ?>
                        </p>
                    </div>
                </article>

                <article class="rounded-2xl border border-zinc-200 bg-white p-6">
                    <h2 class="mb-5 inline-flex items-center gap-2 text-base font-medium text-zinc-900">
                        <span>ⓘ</span> Situação da empresa
                    </h2>
                    <div class="grid gap-3 text-base text-zinc-900 sm:grid-cols-2">
                        <p>
                            <span class="font-semibold">Situação:</span>
                            <span class="ml-2 rounded-md bg-zinc-950 px-2 py-0.5 text-xs font-medium text-white">
                                <?= $dados['situacao'] ?? '' ?>
                            </span>
                        </p>
                        <p>
                            <span class="font-semibold">Status:</span>
                            <span class="ml-2 rounded-md bg-zinc-950 px-2 py-0.5 text-xs font-medium text-white">
                                <?= $dados['status'] ?? '' ?>
                            </span>
                        </p>
                        <p><span class="font-semibold">Data da Situação:</span> <?= $dados['data_situacao'] ?? '' ?></p>
                    </div>
                </article>

                <article class="rounded-2xl border border-zinc-200 bg-white p-6">
                    <h2 class="mb-5 inline-flex items-center gap-2 text-base font-medium text-zinc-900">
                        <span>📊</span> Porte e regime
                    </h2>
                    <div class="space-y-2 text-base text-zinc-900">
                        <div class="grid gap-3 sm:grid-cols-2">
                            <p><span class="font-semibold">Porte:</span>
                                <?= $dados['porte'] ?? '' ?>
                            </p>
                            <p><span class="font-semibold">Capital Social:</span>
                                <?= $dados['capital_social'] ?? '' ?>
                            </p>
                        </div>
                    </div>
                </article>

                <article class="rounded-2xl border border-zinc-200 bg-white p-6">
                    <h2 class="mb-5 inline-flex items-center gap-2 text-base font-medium text-zinc-900">
                        <span>📁</span> Atividade econômica
                    </h2>
                    <div class="space-y-3 text-base text-zinc-900">
                        <p class="font-semibold">Principal:</p>
                        <p class="pl-4">
                            <?= $dados['atividade_principal'][0]['text'] ?? '' ?>
                        </p>
                        <p class="font-semibold">Secundárias:</p>
                        <p class="pl-4 text-slate-500">
                            <?php if (!empty($dados['atividades_secundarias'])): ?>
                                <?php foreach ($dados['atividades_secundarias'] as $atividade): ?>
                                    <?= $atividade['text'] ?? '' ?><br>
                                <?php endforeach; ?>
                            <?php else: ?>
                                Não informada
                            <?php endif; ?>
                        </p>
                    </div>
                </article>

                <article class="rounded-2xl border border-zinc-200 bg-white p-6">
                    <h2 class="mb-5 inline-flex items-center gap-2 text-base font-medium text-zinc-900">
                        <span>📍</span> Endereço
                    </h2>
                    <div class="space-y-2 text-base text-zinc-900">
                        <p><span class="font-semibold">Logradouro:</span>
                            <?= $dados['logradouro'] ?? '' ?>
                        </p>
                        <div class="grid gap-2 sm:grid-cols-2">
                            <p><span class="font-semibold">Número:</span>
                                <?= $dados['numero'] ?? '' ?>
                            </p>
                            <p><span class="font-semibold">Bairro:</span>
                                <?= $dados['bairro'] ?? '' ?>
                            </p>
                        </div>
                        <div class="grid gap-2 sm:grid-cols-2">
                            <p><span class="font-semibold">Cidade:</span> <?= $dados['municipio'] ?? '' ?></p>
                            <p><span class="font-semibold">Estado:</span> <?= $dados['uf'] ?? '' ?></p>
                        </div>
                        <p><span class="font-semibold">CEP:</span>
                            <?= $dados['cep'] ?? '' ?>
                        </p>
                    </div>
                </article>

                <article class="rounded-2xl border border-zinc-200 bg-white p-6">
                    <h2 class="mb-5 inline-flex items-center gap-2 text-base font-medium text-zinc-900">
                        <span>📞</span> Contato
                    </h2>
                    <div class="grid gap-2 text-base text-zinc-900 sm:grid-cols-2">
                        <p><span class="font-semibold">E-mail:</span> <?= $dados['email'] ?? '' ?></p>
                        <p><span class="font-semibold">Telefone:</span>
                            <?= $dados['telefone'] ?? '' ?>
                        </p>
                    </div>
                </article>
            </section>
        <?php endif; ?>
    </div>
</div>