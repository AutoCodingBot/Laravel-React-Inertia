import Authenticated from "@/Layouts/AuthenticatedLayout"
import { Head } from "@inertiajs/react"

export default function Index({auth,projects}){
    return(
        <Authenticated
        user={auth.user}
        header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Project</h2>}
        >
        <Head title="Project" />
        
        </Authenticated>

    )
}