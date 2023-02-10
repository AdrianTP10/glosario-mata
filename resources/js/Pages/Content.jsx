import GlosarioLayout from '@/Layouts/GlosarioLayout';
import Card from '@/Components/Card';
import { Head } from '@inertiajs/react';

export default function Content({auth, errors, articles}) {
    return (
        <GlosarioLayout
            auth={auth}
            errors={errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12 overflow-y-scroll  max-h-screen">
               {
                articles.map((article) =>(
                    <Card key={article.id} article={article}/>
                ))
               }
               
            </div>
        </GlosarioLayout>
    );
}