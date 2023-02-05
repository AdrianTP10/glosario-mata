
export default function Card({article}) {
    
    return (
        <div className="max-w-7xl mx-auto sm:px-6  lg:px-8 sm:py-2 lg:py-4">
            <div className="p-6 bg-white border border-gray-200 overflow-hidden shadow-lg sm:rounded-lg  hover:bg-white">
                <h5 className="mb-2 text-2xl font-bold tracking-tight text-gray-900">{article.title}</h5>
                <p className="font-normal text-gray-700 text-xl">{article.description}</p>
            </div>
        </div>
    );
}