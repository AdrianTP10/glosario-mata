import GlosarioLayout from "@/Layouts/GlosarioLayout";
import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import InputLabel from '@/Components/InputLabel';
import { Link, useForm,Head } from "@inertiajs/react";


function Form(props) {
    const { data, setData, post, proccesing, reset, errors } = useForm({
        title: "",
        description: "",
        reference: "",
    });

    const submit = (e) => {
        e.preventDefault();
        post(route("article.store"), { onSucces: () => reset() });
    };

    return (
        
        <GlosarioLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Nuevo Artículo</h2>}
        >
            <Head title="Nuevo Artículo" />

            <div className="py-12">
                <div className="max-w-2xl mx-auto">
                    <form onSubmit={submit}>

                        <InputLabel forInput={data.title}>Título</InputLabel>
                        <input 
                        value={data.title}
                        onChange={e => setData('title', e.target.value)}
                        type='text'
                        autoFocus
                        className="mb-3 block w-full border-gray-300 rounded-lg"
                        name="title"
                        />
                        <InputError message={errors.title} className="mt-2" />



                        <InputLabel forInput={data.description}>Descripción</InputLabel>
                        {/* <input 
                        value={data.description}
                        onChange={e => setData('description', e.target.value)}
                        type='text'
                        autoFocus
                        className="mb-3 block w-full border-gray-300 rounded-lg"
                        name="description"
                        /> */}
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-normal text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Escriba el concepto aquí...">
                        </textarea>
                        
                    
                        <InputError message={errors.description} className="mt-2" />

                    <InputLabel forInput={data.reference}>Referencia bibliográfica</InputLabel>
                    <input 
                      value={data.reference}
                      onChange={e => setData('reference', e.target.value)}
                      type='text'
                      autoFocus
                      className="mb-3 block w-full border-gray-300 rounded-lg"
                      name="reference"
                    />
                    <InputError message={errors.reference} className="mt-2" />

                 
                    
                    <Link href={route('dashboard')} className="mt-4 font-semibold text-xs text-white bg-red-600 hover:bg-red-700 rounded-md mr-2 mb-2 px-4 py-2 uppercase">
                        Cancelar
                    </Link>
                    <PrimaryButton
                        className="mt-4 text-white bg-indigo-600 hover:bg-indigo-700 font-medium rounded-lg mr-2 mb-2"
                        disabled={proccesing}
                    >
                        Crear
                    </PrimaryButton>
                </form>
            </div>
            
            </div>
        </GlosarioLayout>
    )
}

export default Form