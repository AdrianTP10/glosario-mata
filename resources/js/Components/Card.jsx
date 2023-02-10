
export default function Card({article}) {
    
    return (
        <div className="max-w-7xl mx-auto sm:px-6  lg:px-8 sm:py-2 lg:py-4">
            <div className="p-6 bg-white border border-gray-200 overflow-hidden shadow-lg sm:rounded-lg  hover:bg-white">
                <h1 className="mb-2 text-2xl font-bold tracking-tight text-gray-900">{article.title}</h1>
                <p className="font-normal text-gray-700 text-xl">{article.description}</p>
                <h5 className="p-2 text-lg text-gray-700">Autor: {article.author}</h5>
            </div>
        </div>
    );
}